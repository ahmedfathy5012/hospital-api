<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosesTable extends Migration {

	public function up()
	{
		Schema::create('diagnoses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->longText('diagnose')->nullable();
			$table->longText('drugs')->nullable();
			$table->bigInteger('doctor_id')->nullable();
			$table->bigInteger('patient_case_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('diagnoses');
	}
}
