var module=angular.module('myapp',['ngRoute']);

module.config(function($routeProvider){
  $routeProvider.when('/home',{
    templateUrl:'view/home.html',
  })
  .when('/contact',{
    templateUrl:'view/contact.html',
    controller:'myctr',
  })
  .when('/start',{
    templateUrl:'app/start.html',
    controller:'myctr',
  })
  .otherwise({redirectTo:'/index.html'});

});
module.controller("myctr",function($scope){
   $scope.person=[
       {
           name:'ayoub',
           age:20,
           color:"red",
       },
       {
           name:'amine',
           age: 30,
           color: "black",
       },
       {
           name:'Ali',
           age: 17,
           color: "blue",
       },
       {
           name:'Selma',
           age: 19,
           color: "yellow",
       },
       {
           name:'Imane',
           age: 21,
           color: "blue",
       }
     ];
    $scope.del=function(x)
    {
      var i=$scope.person.indexOf(x);
      $scope.person.splice(i,1);
    }
    $scope.addnew=function()
    {
      $scope.person.push(
        {
          name:$scope.new.name,
          age:$scope.new.age,
          color:$scope.new.color,
        }
      );
      $scope.new.name='';
      $scope.new.age='';
      $scope.new.color='';
    }

});
