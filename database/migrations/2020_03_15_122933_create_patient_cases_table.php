<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientCasesTable extends Migration {

	public function up()
	{
		Schema::create('patient_cases', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('patient_id')->nullable();
			$table->date('entry_date');
			$table->date('exit_date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('patient_cases');
	}
}
