<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maestros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 30);
			$table->string('correo', 50);
			$table->string('username' 20);
			$table->string('contra', 10);
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
		//
	}

}
