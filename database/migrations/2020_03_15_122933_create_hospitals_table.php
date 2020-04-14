<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->bigInteger('number');
			$table->string('phone');
			$table->bigInteger('specialization_id');
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}
