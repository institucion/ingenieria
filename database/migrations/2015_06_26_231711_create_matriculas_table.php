<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriculas', function(Blueprint $table)
		{
			$table->integer('idmatricula');
			$table->primary('idmatricula');
			$table->integer('idestudiante_m');
			$table->integer('idcurso_m');
			$table->timestamps();
			$table->foreign('idestudiante_m')->references('identificacion')->on('estudiantes')->onDelete('cascade');
			$table->foreign('idcurso_m')->references('id')->on('cursos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matriculas');
	}

}
