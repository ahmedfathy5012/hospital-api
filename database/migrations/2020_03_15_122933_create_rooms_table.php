<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoomsTable extends Migration {

	public function up()
	{
		Schema::create('rooms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('room_number');
			$table->integer('bed_count');
		});
	}

	public function down()
	{
		Schema::drop('rooms');
	}
}
