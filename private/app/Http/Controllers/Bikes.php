<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class Bikes extends Controller{
    
    function index( $id = null ){
    	if( null == $id ){
    		return Bike::orderBy( 'id_bike', 'asc' )->get();
    	}else{
    		return $this->show($id);
    	}
    }

    /**
     * store
     * @param Request $request
     * @return Response
     */
    function store( Request $request ){
    	$bike = new Bike;
    	$bike->bike_name = $request->input('bike_name');
    	$bike->bike_register_number = $request->input('bike_register_number');
    	$bike->bike_description = $request->input('bike_description');
    	$bike->save();

    	return 'Bike record successfully with register number '. $bike->bike_register_number;
    }

    /**
     * show
     * @param int $id
     * @return Response
     */
    public function show( $id ){
    	return Bike::find( $id );
    }

    public function update( Request $request, $id ){
    	$bike = Bike::find( $id );
    	$bike->bike_name = $request->input( 'bike_name' );
    	$bike->bike_register_number = $request->input('bike_register_number');
    	$bike->bike_description = $request->input( 'bike_description' );
    	$bike->save();

    	return 'Success update bike #' . $bike->id;
    }

    public function destroy( Request $request ){
    	$bike = Bike::find( $request->id );

    	$bike->delete();

    	return 'Bike record successfully deleted';

    }

}
