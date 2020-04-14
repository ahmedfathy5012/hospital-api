<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorProblemsTable extends Migration {

	public function up()
	{
		Schema::create('doctor_problems', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('doctor_id')->nullable();
			$table->longText('doctor_problem');
		});
	}

	public function down()
	{
		Schema::drop('doctor_problems');
	}
}
