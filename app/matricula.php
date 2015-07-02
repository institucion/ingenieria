<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class matricula extends Model {

	protected $table ='matriculas';
	
	protected $fillable =['idestudiante_m','idcurso_m'];

}
