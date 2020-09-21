var app = angular.module('App', [ "ui.router","toastr" ]); 


app.directive("owlCarousel", function() {
    return {
        restrict: 'E',
        transclude: false,
        link: function (scope) {
            scope.initCarousel = function(element) {
              // provide any default options you want
                var defaultOptions = {
                };
                var customOptions = scope.$eval($(element).attr('data-options'));
                // combine the two options objects
                for(var key in customOptions) {
                    defaultOptions[key] = customOptions[key];
                }
                // init carousel
                $(element).owlCarousel(defaultOptions);
            };
        }
    };
})
app.directive('owlCarouselItem', [function() {
    return {
        restrict: 'A',
        transclude: false,
        link: function(scope, element) {
          // wait for the last item in the ng-repeat then call init
            if(scope.$last) {
                scope.initCarousel(element.parent());
            }
        }
    };
}]);

app.factory('storageService', ['$rootScope', function ($rootScope) {
    return {
        get: function (key) {
            return localStorage.getItem(key);
        },
        set: function (key, data) {
            localStorage.setItem(key, data);
        }
    };
}]);

app.run(['$rootScope', '$state', '$stateParams',  '$http',  function ($rootScope, $state, $stateParams,  $http) {
    $rootScope.$on('$stateChangeStart', function (event, toState, toParams) {
        $rootScope.Auth_Token           = localStorage.getItem('Auth_Token')
        $rootScope.LoggedInUserID  = localStorage.getItem('LoggedInUserID');

        if (toState.authenticate && (Auth_Token === '' || Auth_Token === null || Auth_Token === undefined)) {
            $rootScope.toState = toState.name;
            $rootScope.toStateParams = toParams;
            // Abort transition
            event.preventDefault();
            // Redirect to login page
            $state.go('Login');
        }
    });
}]);

//toaster toastrConfig
app.config(function (toastrConfig) {
    angular.extend(toastrConfig, {
            autoDismiss: false,
            allowHtml:true,
            containerId: 'toast-container',
            maxOpened: 0, 
            progressBar: true,   
            newestOnTop: true,
            positionClass: 'toast-top-center custom-developer-toster',
            preventDuplicates: false,
            preventOpenDuplicates: false,
            timeOut: 5000,
            target: 'body',
            bodyOutputType: 'trustedHtml'
    });
});

app.service('homeService', function ($http,$q,$rootScope) {
    var getCategoryList    = undefined;
    var getCHeaderList    = undefined;
    
     
    this.getCategoryList = function() {
  
       if (!getCategoryList) { 
        
        var deferred = $q.defer(); 
        // get skills list form backend
        $http.post(Base_url+'get/category')
          .then(function(result) {            
            getCategoryList = result.data.data;            
            deferred.resolve(getCategoryList);
          }, function(error) {
            getCategoryList = error;
            deferred.reject(error);
          }); 
        
        getCategoryList = deferred.promise;
      }
      return $q.when(getCategoryList);
    }

    this.getHeaderList = function() {
  
       if (!getCHeaderList) {         
        var deferred = $q.defer(); 
        // get skills list form backend
        $http.post(Base_url+'home/headerMenuList')
          .then(function(result) {            
            getCHeaderList = result.data.data;            
            deferred.resolve(getCHeaderList);
          }, function(error) {
            getCHeaderList = error;
            deferred.reject(error);
          }); 
        
        getCHeaderList = deferred.promise;
      }
      return $q.when(getCHeaderList);
    }
});

app.config(function($stateProvider, $locationProvider,  
                                $urlRouterProvider) { 
   /* $locationProvider.html5Mode(true).hashPrefix('');*/
    
    // creating routes or states 
    $stateProvider 
        .state('Home', { 
            url : '/home', 
            templateUrl : Base_url+'view/home', 
            controller : "HomeCtrl"
        }) 
        .state('Login', { 
            url : '/login', 
            templateUrl : Base_url+'view/login',  
            controller : "LoginCtrl"
        }) 
        .state('Signup', { 
            url : '/signup', 
            templateUrl : Base_url+'view/signup',  
            controller : "SignupCtrl"
        })
        .state('ProductView', { 
            url : '/product-view/:id', 
            templateUrl : Base_url+'view/product-view',  
            controller : "ProdcutViewCtrl"
        })
        .state('Cart', { 
            url : '/cart', 
            templateUrl : Base_url+'view/cart'  
            // controller : "CartViewCtrl"
        })
        .state('Checkout', { 
            url : '/checkout', 
            templateUrl : Base_url+'view/checkout'  
            // controller : "CheckoutViewCtrl"
        })
        .state('Products', { 
            url : '/products/:id', 
            templateUrl : Base_url+'view/products',  
            controller : "AllProdcutCtrl"
        })
        .state('Verification', { 
            url : '/verification', 
            templateUrl : Base_url+'view/verification'
        });
  
    // Redirect to home page if url does not  
    // matches any of the three mentioned above 
    $urlRouterProvider.otherwise("/home"); 
}); 

app.controller('MainCtrl', function() {}); 
app.controller('HomeCtrl', function($scope,homeService,$state,$http) {
    $scope.products = [];
   // $scope.newTest = 'hi';
    homeService.getHeaderList().then(function(response){
         $scope.headerMenuList = angular.copy(response); 
    })
    $scope.redirectToProductPage = function(id) {
        $state.go('Products',{id:id.replace(' ','-')});
    }
    $http.post(Base_url + 'getAllProduct',{home_category_id:1}).then(function(response) {
        if (response.data.status) {
            $scope.products.best_sellers = response.data.data;
        }
    });
    $http.post(Base_url + 'getAllProduct',{home_category_id:2}).then(function(response) {
        if (response.data.status) {
            $scope.products.hot_deals = response.data.data;
        }
    });
    $http.post(Base_url + 'getAllProduct',{home_category_id:3}).then(function(response) {
        if (response.data.status) {
            $scope.products.feature_product = response.data.data;
        }
    });
    $http.post(Base_url + 'getAllProduct',{home_category_id:4}).then(function(response) {
        if (response.data.status) {
            $scope.products.new_arrivals = response.data.data;
        }
    });




});
app.controller('LoginCtrl', function($scope,toastr,$http,$state,storageService) {
    $scope.submitForm = function (isValid) {
        if (isValid) {
            $scope.isLoadding = true;
            $http.post(Base_url + 'UserLogIn',$scope.userData)
                .then(function (response) {
                    if (response.data.status) {
                        toastr.success(response.data.msg);
                        storageService.set('LoggedInUserID',response.data.data.user_id);
                        storageService.set('Auth_Token',response.data.data.Auth_Token);
                        $state.go('Home');
                    }
                    else{
                        toastr.error(response.data.msg);
                    }
                });
        }
    };
});
app.controller('SignupCtrl', function($scope,toastr,$http,$state) {
    $scope.submitForm = function (isValid) {
        if (isValid) {
            $scope.isLoadding = true;
            $http.post(Base_url + 'UserSignUp',$scope.userData)
                .then(function (response) {
                    if (response.data.status) {
                        toastr.success(response.data.msg);
                        $state.go('Login');
                    }
                    else{
                        toastr.error(response.data.msg);
                    }
                });
        }
    };
});
app.controller('ProdcutViewCtrl', function($scope,toastr,$http,$state,$stateParams,homeService) {

    $scope.product_id = 4;
    $scope.singleProductDetails = [];
    $scope.relatedProductDetails = [];
    homeService.getHeaderList().then(function(response){
         $scope.headerMenuList = angular.copy(response); 
    })
    $scope.getSingleProductDetails = function() {
        if ($scope.product_id != null && $scope.product_id != '' && $scope.product_id != undefined) {
            $http.post(Base_url + 'getSingleProductDetails', { product_id: $stateParams.id}).then(function(response) {
                if (response.data.status) {
                    $scope.singleProductDetails = angular.copy(response.data.data);
                }
            });
        } else {
            toastr.error('Product not found');
        }
    }
    $scope.getSingleProductDetails();

    $scope.getRelatedProductDetails = function() {
        if ($scope.product_id != null && $scope.product_id != '' && $scope.product_id != undefined) {
            $http.post(Base_url + 'getRelatedProductDetails', { product_id: $scope.product_id}).then(function(response) {
                if (response.data.status) {
                    $scope.relatedProductDetails = angular.copy(response.data.data);
                }
            });
        } else {
            toastr.error('Product not found');
        }
    }
    $scope.getRelatedProductDetails();
});
app.controller('AllProdcutCtrl', function($scope,toastr,$http,$state,$stateParams,homeService) {
  $scope.pagination = [];
  $scope.pagination.pageIndex = 1;
  $scope.pagination.pageSizeSelected = 10;
  homeService.getHeaderList().then(function(response){
       $scope.headerMenuList = angular.copy(response); 
  })
    $scope.getAllProduct = function () {
        $scope.isLoadding = true;
        $http.post(Base_url + 'getAllProduct',{
            subcategory     : $stateParams.id,
            pageIndex       : $scope.pagination.pageIndex,
            pageSize        : $scope.pagination.pageSizeSelected
        })
        .then(function (response) {
          if (response.data.status) {
            $scope.productsList = response.data.data;
            $scope.pagination.allCount = response.data.total;
            $scope.title = response.data.title.subcategory;
          }
            
        });
    };
    $scope.getAllProduct();
    $scope.redirectToProductPage = function(id) {
        $state.go('Products',{id:id.replace(' ','-')});
    }
});
