<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsTable extends Migration {

	public function up()
	{
		Schema::create('drugs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->bigInteger('count');
			$table->date('production_date');
			$table->date('expiry_date');
			$table->text('how_to_use')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('drugs');
	}
}
