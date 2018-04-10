<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layout2 extends Model
{
    protected $table='layout2';
    protected $fillable=[
    	'titulo',
    	'texto',
    	'nombre',
    	'img',
    	'nombre2',
    	'img2',
    	'nombre3',
    	'img3',
    ];
}
