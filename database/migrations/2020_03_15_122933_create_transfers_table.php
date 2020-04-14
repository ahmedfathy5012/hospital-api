<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransfersTable extends Migration {

	public function up()
	{
		Schema::create('transfers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('transfers');
	}
}