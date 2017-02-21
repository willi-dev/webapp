@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                	@if (Auth::guest())

	                   Login Terlebih Dahulu
	                @else
	                	You are logged in!
	                @endif
                </div>
            </div>
        </div>
    </div>


    <div class="row">
    	
    	

    </div>
</div>
@endsection
