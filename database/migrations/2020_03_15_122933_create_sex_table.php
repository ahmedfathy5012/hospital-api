<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSexTable extends Migration {

	public function up()
	{
		Schema::create('sex', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('sex');
	}
}