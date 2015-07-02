<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model {

protected $table ='cursos';
	protected $primarykey ='id';
	protected $fillable =['id','grado','grupo'];


}
