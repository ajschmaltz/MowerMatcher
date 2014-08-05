<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSearchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('searches', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id')->index();
      $table->integer('price_max');
      $table->integer('price_min');
      $table->string('mower_make');
      $table->string('use');
      $table->string('style');
      $table->integer('cutting_width_max');
      $table->integer('cutting_width_min');
      $table->string('engine_make');
      $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('searches');
	}

}
