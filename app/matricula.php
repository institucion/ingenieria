<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class matricula extends Model {

	protected $table ='matriculas';
	
	protected $primarykey ='idmatricula';
	
	protected $fillable =['idmatricula','idestudiante_m','idcurso_m'];

}
