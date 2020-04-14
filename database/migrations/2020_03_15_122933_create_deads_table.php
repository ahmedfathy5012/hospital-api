<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeadsTable extends Migration {

	public function up()
	{
		Schema::create('deads', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('patient_id')->nullable();
			$table->date('death_date');
			$table->text('cause_of_death');
			$table->bigInteger('doctor_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('deads');
	}
}
