<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmbulancesTable extends Migration {

	public function up()
	{
		Schema::create('ambulances', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('driver_id')->nullable();
			$table->string('car_number');
			$table->bigInteger('paramedic_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('ambulances');
	}
}
