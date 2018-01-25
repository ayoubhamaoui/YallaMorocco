var yallah = angular.module('yallah',['ngRoute']);


yallah.config(['$routeProvider',function($routeProvider){
  $routeProvider
     .when('/home', {
       templateUrl: 'views/home.html'
     })
     .when('/cities', {
       templateUrl: 'views/cities.html',
       controller: 'project'
     }).when('/about',{
      templateUrl: 'views/about.html',
      controller: 'project'
  }).when('/videos', {
       templateUrl: 'views/videos.html',
       controller: 'project'
     }).otherwise({
       redirectTo: '/home'
     });
}]);

yallah.controller('project',['$scope','$http',function($scope,$http){


$http.get('data/yallah.json').then(successCallback, errorCallback);

function successCallback(data){
    $scope.projects = data.data;
}
function errorCallback(error){
    //error code
}

     $('.classNav').click(function() {
            $('body').addClass('profile-page')
        });

     $('.classHome').click(function() {
            $('body').removeClass('profile-page')
        });

}]);