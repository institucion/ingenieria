<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class profesore extends Model {

	protected $table ='profesores';
	protected $primarykey ='cedula'
	protected $fillable =['cedula','nombre','apellido','telefono','sexo','titulo','fec_vinculacion','fec_desvinculacion','estado'];


}
