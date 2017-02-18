<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model{
	// $fillable
    protected $fillable = array('id_bike', 'bike_name', 'bike_description', 'bike_register_number', 'bike_id_owner');
}
