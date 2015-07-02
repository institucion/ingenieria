<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class asignatura_matriculada extends Model {

	protected $table ='asignatura_matriculadas';

	protected $fillable =['identificacion_a','codigo_a','estado'];


}
