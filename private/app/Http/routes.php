<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/api/v1/bikes/{id?}', 'Bikes@index');
Route::post( '/api/v1/bikes', 'Bikes@store' );
Route::post( '/api/v1/bikes/{id}', 'Bikes@update' );
Route::delete( '/api/v1/bikes/{id}', 'Bikes@destroy' );
