angular.module('cultstage',['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl:'templates/home.html',
		controller: function($scope){
		$scope.header=false;
		}
	});
}])
;