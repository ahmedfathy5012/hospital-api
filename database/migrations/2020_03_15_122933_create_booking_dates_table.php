<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingDatesTable extends Migration {

	public function up()
	{
		Schema::create('booking_dates', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->time('appointment_time');
			$table->date('appointment_date');
			$table->bigInteger('patient_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('booking_dates');
	}
}
