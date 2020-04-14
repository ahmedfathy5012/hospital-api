<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientProblemsTable extends Migration {

	public function up()
	{
		Schema::create('patient_problems', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->longText('problem_describtion');
			$table->bigInteger('patient_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('patient_problems');
	}
}
