<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('secretarias', function(Blueprint $table)
		{
			$table->integer('cedula');
			$table->primary('cedula');
			$table->string('nombre');
			$table->string('apellido');
			$table->integer('telefono');
			$table->string('contraseña');
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
		Schema::drop('secretarias');
	}

}
