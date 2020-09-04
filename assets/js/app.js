var app = angular.module('App', [ "ui.router","toastr" ]); 

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
            url : '/product-view', 
            templateUrl : Base_url+'view/product-view',  
            controller : "ProdcutViewCtrl"
        })
        .state('Products', { 
            url : '/products', 
            templateUrl : Base_url+'view/products',  
            controller : "AllProdcutCtrl"
        });
  
    // Redirect to home page if url does not  
    // matches any of the three mentioned above 
    $urlRouterProvider.otherwise("/home"); 
}); 

app.controller('MainCtrl', function() {}); 
app.controller('HomeCtrl', function($scope,homeService) {
   
    $scope.items1 = [1,2,3,4,5];
    $scope.items2 = [1,2,3,4,5,6,7,8,9,10];
    $scope.slides = [
    {
      image: 'http://lorempixel.com/400/200/'
    },
    {
      image: 'http://lorempixel.com/400/200/food'
    },
    {
      image: 'http://lorempixel.com/400/200/sports'
    },
    {
      image: 'http://lorempixel.com/400/200/people'
    }
  ];
  $scope.myInterval = 3000;
   // $scope.newTest = 'hi';
    homeService.getHeaderList().then(function(response){
         $scope.headerMenuList = angular.copy(response); 
    })


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
app.controller('ProdcutViewCtrl', function($scope,toastr,$http,$state) {

    $scope.product_id = 4;
    $scope.singleProductDetails = [];
    $scope.relatedProductDetails = [];

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

    $scope.getSingleProductDetails = function() {
        if ($scope.product_id != null && $scope.product_id != '' && $scope.product_id != undefined) {
            $http.post(Base_url + 'getSingleProductDetails', { product_id: $scope.product_id}).then(function(response) {
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
app.controller('AllProdcutCtrl', function($scope,toastr,$http,$state) {
  $scope.pagination = [];
  $scope.pagination.pageIndex = 1;
  $scope.pagination.pageSizeSelected = 10;
    $scope.getAllProduct = function () {
        $scope.isLoadding = true;
        $http.post(Base_url + 'getAllProduct',{
            pageIndex       : $scope.pagination.pageIndex,
            pageSize        : $scope.pagination.pageSizeSelected
        })
        .then(function (response) {
          if (response.data.status) {
            $scope.productsList = response.data.data;
            $scope.pagination.allCount = response.data.total;
          }
            
        });
    };
    $scope.getAllProduct();
});
