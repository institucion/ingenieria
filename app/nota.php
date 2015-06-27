<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class nota extends Model {

	protected $table ='notas';
	protected $primarykey ='idnota'
	protected $fillable =['idnota','id_asignaturas_n','nota1','nota1','nota2','nota3','nota4','notas_def'];


}
