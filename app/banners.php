<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{	
	protected $table ='banner';
    protected $fillable =[
    	'titulo',
    	'subtitulo',
    	'img',
    	'id_pagina'
    ];
}
