<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaMatriculadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignatura_matriculadas', function(Blueprint $table)
		{
			$table->integer('idasignacion');
			$table->primary('idasignacion');
			$table->integer('identificacion_a');
			$table->integer('codigo_a');
			$table->integer('estado');
			$table->timestamps();
			$table->foreign('codigo_a')->references('codigo')->on('asignaturas')->onDelete('cascade');
			$table->foreign('identificacion_a')->references('identificacion')->on('estudiantes')->onDelete('cascade');
		});
	}
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignatura_matriculadas');
	}

}
