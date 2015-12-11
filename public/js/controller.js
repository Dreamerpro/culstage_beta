angular.module('cultstage')
.controller('headerCtrl', function($scope){
	$scope.ngHeader=false;
})
.controller('langSCtrl', function($scope){
	$scope.langs=['Hindi','English','Kannada','Tamil','Telugu','Malayalam','Bangla', 'Marathi'];
})