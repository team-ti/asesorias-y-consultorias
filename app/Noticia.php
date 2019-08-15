<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use SoftDeletes;

    protected $table = 'noticias';
    protected $primaryKey = 'id_noticia';
  	
  	protected $hidden =[
  		'password', 'remember_token'
  	];
  	protected $dates = ["deleted_at"];
}
