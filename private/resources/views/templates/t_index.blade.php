<!DOCTYPE html>
<html lang="en" ng-app="bikeRegister">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Bike Register</title>

	{!! Html::style( 'assets/dist/css/materialize.css' ) !!}
</head>
<body>
	
	@yield('content')
	{!! Html::script('app-angular/angular.js') !!}
	{!! Html::script('assets/dist/js/bin/jquery-3.1.1.min.js') !!}
	{!! Html::script('assets/dist/js/bin/materialize.min.js') !!}

	{!! Html::script('app-angular/app.js') !!}
	{!! Html::script('app-angular/controllers/bikes.js') !!}

</body>
</html>