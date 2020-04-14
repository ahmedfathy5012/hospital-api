<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmergenciesTable extends Migration {

	public function up()
	{
		Schema::create('Emergencies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('patient_id')->nullable();
			$table->string('injury_type');
			$table->bigInteger('doctor_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Emergencies');
	}
}
