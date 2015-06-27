<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class asignatura extends Model {

protected $table ='asignaturas';
	protected $primarykey ='codigo'
	protected $fillable =['codigo','nombre','logros','unidades','idcurso_a','intensidad','estado'];


}
