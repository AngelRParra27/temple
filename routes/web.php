<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'inicioController@index');
Route::get('/promocion', function(){
	return view('promocion-activacion-politica');
});
Route::get('/consultoria', function(){
	return view('consultoria-politica');
});
Route::get('/estudio', function(){
	return view('estudio-opinion-publica');
});

Route::get('/admin', function(){
	return view('adminPanel');
});

Route::resource('/layout1', 'layout1Controller');
route::POST('/updateLayout1/{id}', 'layout1Controller@update');

route::get('/layout2', 'layout2Controller@index');
route::POST('/updateLayout2/{id}', 'layout2Controller@update');

route::resource('/layout3', 'layout3Controller');

route::get('/banner', 'bannerController@index');