<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model {
	protected $table ='estudiantes';

	protected $fillable =['identificacion','nombre','apellido','acudiente','telefono','sexo','fec_vinculacion','fec_desvinculacion','estado'];


}
