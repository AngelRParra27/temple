<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layout1 extends Model
{
    protected $table='layout1';
    protected $fillable=[
    	'titulo',
    	'texto',
    	'titulo2',
    	'texto2',
    	'img2',
    	'titulo3',
    	'texto3',
    	'img3',
    ];
}
