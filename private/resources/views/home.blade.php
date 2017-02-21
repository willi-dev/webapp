@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
	    	
		<div class="panel-heading">Dashboard</div>

	    <div class="panel-body">
	    	@if (Auth::guest())
				
	        @else
	        	You are logged in!
	        @endif
	    </div>

    </div>
</div>
@endsection
