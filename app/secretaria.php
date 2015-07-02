<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class secretaria extends Model {

	
	protected $table ='secretarias';
	protected $primarykey ='cedula';
	protected $fillable =['cedula','nombre','apellido','telefono','contraseña'];



}
