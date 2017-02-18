@extends('templates/t_index')

@section('content')

<div class="container" ng-controller="BikeController">
	
	<div class="row">
		<div class="col s12 m12">
			<h1>Bikes</h1>
		</div>
	</div>

	<div class="row">
		<div class="col s12 m12">
			<input type="hidden" name="bike_id_owner" value="" >
			<div class="row">
				<div class="input-field col s12 m12">
					<input type="text" placeholder="bike name" id="bike_name" name="bike_name" class="validate">
					<label for="bike_name">Bike Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<input type="text" placeholder="register number" id="bike_register_number" name="bike_register_number" class="validate">
					<label for="bike_register_number">Bike Register Number</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12">
					<textarea name="bike_description" id="bike_description" class="materialize-textarea"></textarea>
					<label for="bike_description">Bike Description</label>
				</div>
			</div>
		</div>
		
	</div>

</div>

@stop
