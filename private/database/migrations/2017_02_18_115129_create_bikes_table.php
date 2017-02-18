<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bikes', function( Blueprint $table){
            $table->increments('id_bike');
            $table->string('bike_name');
            $table->text('bike_description');
            $table->string('bike_register_number');
            $table->integer('bike_id_owner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bikes');
    }
}
