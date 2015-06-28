<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table)
		{
			$table->integer('codigo');
			$table->primary('codigo');
			$table->integer('logros');
			$table->integer('unidades');
			$table->integer('idcurso_a');
			$table->integer('intensidad');
			$table->string('estado');
			$table->timestamps();
			$table->foreign('idcurso_a')->references('id')->on('cursos')->onDelete('cascade');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignaturas');
	}

}
