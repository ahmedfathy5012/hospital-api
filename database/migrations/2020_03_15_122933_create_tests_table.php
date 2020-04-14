<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestsTable extends Migration {

	public function up()
	{
		Schema::create('tests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('patient_id')->nullable();
			$table->date('date');
			$table->mediumText('analyze_result');
			$table->bigInteger('doctor_id')->nullable();
			$table->bigInteger('analyze_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tests');
	}
}
