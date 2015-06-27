<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class asignatura_matriculada extends Model {

	protected $table ='asignatura_matriculadas';
	protected $primarykey ='idasignacion'
	protected $fillable =['idasignacion','identificacion_a','codigo_a','estado'];


}
