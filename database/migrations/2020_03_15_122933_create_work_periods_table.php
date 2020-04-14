<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkPeriodsTable extends Migration {

	public function up()
	{
		Schema::create('work_periods', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('doctor_id')->nullable();
			$table->time('time_attendance');
			$table->time('time_leave');
			$table->integer('day_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('work_periods');
	}
}
