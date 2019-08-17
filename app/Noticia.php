<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{

    protected $table = 'noticias';
    protected $primaryKey = 'id';
  	
  	protected $hidden =[
  		'password', 'remember_token'
  	];
  	protected $softDelete = false;

}
