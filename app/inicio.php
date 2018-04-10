<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\banners;

class inicio extends Model
{
	protected $table= 'home';

    public function banner(){
    	return $this->hasOne('App\banners','id', 'banner_id');
    } 
    public function layout1(){
    	return $this->hasOne('App\layout1', 'id', 'section_1');
    }
    public function layout2(){
    	return $this->hasOne('App\layout2', 'id', 'section_1');
    }
}
