<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model {
	//
	protected $table = 'estudiante';
	protected $fillable = ['title', 'body'];
	protected $guarded = ['id'];
}
