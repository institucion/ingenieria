<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class carga extends Model {

	protected $table ='cargas';
	protected $primarykey ='idcarga'
	protected $fillable =['idcarga','id_profesor','id_asignatura'];


}
