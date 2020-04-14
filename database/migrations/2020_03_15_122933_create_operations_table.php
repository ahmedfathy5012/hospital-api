<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperationsTable extends Migration {

	public function up()
	{
		Schema::create('operations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('patient_id')->nullable();
			$table->bigInteger('anesthesiologist_id')->nullable();
			$table->bigInteger('anesthetic_id')->nullable();
			$table->date('date');
			$table->string('name');
			$table->bigInteger('surgeon_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('operations');
	}
}
