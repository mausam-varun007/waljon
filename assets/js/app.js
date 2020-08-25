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
    $scope.newTest = 'hi';
   /* homeService.getCategoryList().then(function(response){
         $scope.category = angular.copy(response); 
    })*/


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