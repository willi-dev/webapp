app.controller('bikesController', function( $scope, $http, API_URL ){

	$http.get( API_URL + 'bikes' )
		.success( function( response ){
			$scope.bikes = response;
		} );

	
});