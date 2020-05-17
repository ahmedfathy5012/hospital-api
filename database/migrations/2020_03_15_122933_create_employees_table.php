<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('date_of_hiring');
			$table->string('first_name');
			$table->string('second_name');
			$table->string('third_name')->nullable();
			$table->bigInteger('nationality_id');
			//$table->string('Identification_number');
			$table->string('address');
			$table->date('date_of_birth')->nullable();
			$table->string('phone');
			$table->string('email')->nullable();
			$table->string('social_status');
			$table->bigInteger('job_id');
			$table->integer('sex_id');
			$table->integer('blood_id');
			$table->text('notes')->nullable();
			$table->string('image')->nullable();
			$table->bigInteger('user_id');
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}
