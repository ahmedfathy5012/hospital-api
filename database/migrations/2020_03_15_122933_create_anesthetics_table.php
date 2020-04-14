<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnestheticsTable extends Migration {

	public function up()
	{
		Schema::create('anesthetics', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('anesthetics');
	}
}