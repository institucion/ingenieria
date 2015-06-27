<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesores', function(Blueprint $table)
		{
			
            $table->integer('cedula');
			$table->primary('cedula');
			$table->string('nombre');
			$table->string('apellido');
			$table->integer('telefono');
			$table->string('sexo');
			$table->string('titulo');
			$table->date('fec_desvinculacion');
			$table->date('fec_vinculacion');
			$table->string('estado');

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
		Schema::drop('profesores');
	}

}
