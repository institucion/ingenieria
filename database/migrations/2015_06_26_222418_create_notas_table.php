<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->integer('idnota');
			$table->integer('id_asignaturas_n');
			$table->integer('notas1');
			$table->integer('notas2');
			$table->integer('notas3');
			$table->integer('notas4');
			$table->integer('notas_def');
			$table->timestamps();
			$table->foreign('id_asignaturas_n')->references('codigo')->on('asignaturas')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notas');
	}

}
