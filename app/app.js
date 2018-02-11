var yallah = angular.module('yallah',['ngRoute']);


yallah.config(['$routeProvider',function($routeProvider){
  $routeProvider
     .when('/home', {
       templateUrl: 'views/home.html'
     }).when('/cities', {
       templateUrl: 'views/cities.html',
       controller: 'project'
     }).when('/about',{
      templateUrl: 'views/about.html',
      controller: 'project'
     }).when('/videos', {
       templateUrl: 'views/videos.html',
       controller: 'project'
     }).when('/gv', {
       templateUrl: 'views/gv.php',
       controller: 'project'
     }).when('/ge', {
       templateUrl: 'views/ge.php',
       controller: 'project'
     }).when('/gt', {
       templateUrl: 'views/gt.php',
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

     $('.classNav').click(function(){
       $('li').removeClass('active');
       $('.classNav').addClass('active')
     });

     $('.home').click(function(){
       $('li').removeClass('active');
       $('.home').addClass('active')
     });

     $('.cities').click(function(){
       $('li').removeClass('active');
       $('.cities').addClass('active')
     });

     $('.videos').click(function(){
       $('li').removeClass('active');
       $('.videos').addClass('active')
     });


     $('.classNav').click(function() {
            $('body').addClass('profile-page')
        });

     $('.classHome').click(function() {
            $('body').removeClass('profile-page')
        });

}]);
