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
			$table->integer('identificacion')->unsigned()->unique();
			$table->string('nombre');
			$table->string('apellido');
			$table->integer('telefono')->unsigned();
			$table->string('sexo');
			$table->mediumText('direccion');
			$table->date('fec_nacimiento');
			$table->date('fec_vinculacion');
			$table->string('estado');
			$table->timestamps();
			$table->primary('identificacion');
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
