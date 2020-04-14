<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnalyzesTable extends Migration {

	public function up()
	{
		Schema::create('analyzes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			//$table->bigInteger('test_id');
		});
	}

	public function down()
	{
		Schema::drop('analyzes');
	}
}
