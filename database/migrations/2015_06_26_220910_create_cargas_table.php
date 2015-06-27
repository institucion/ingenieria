<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargas', function(Blueprint $table)
		{
			
			$table->integer('idcarga');
			$table->primary('idcarga');
			$table->integer('id_profesor');
			$table->integer('id_asignatura');
			$table->timestamps();
			$table->foreign('id_profesor')->references('cedula')->on('profesores')->onDelete('cascade');
			$table->foreign('id_asignatura')->references('codigo')->on('asignaturas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargas');
	}

}
