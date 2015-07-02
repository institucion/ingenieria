<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->integer('identificacion');
			$table->primary('identificacion');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('acudiente');
			$table->integer('telefono');
			$table->string('sexo');
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
		Schema::drop('estudiantes');
	}

}
