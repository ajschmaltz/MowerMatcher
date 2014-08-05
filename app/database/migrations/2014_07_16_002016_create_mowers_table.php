<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMowersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mowers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
      $table->integer('price');
      $table->string('mower_make');
      $table->string('mower_model');
      $table->string('use');
      $table->string('style');
      $table->integer('year');
      $table->integer('cutting_width');
      $table->string('engine_make');
      $table->string('engine_model');
      $table->integer('engine_hours');
			$table->text('body');
      $table->float('lat', 10, 6);
      $table->float('lon', 10, 6);
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
		Schema::drop('mowers');
	}

}
