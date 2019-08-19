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

//Route::get('/', function () {
	Route::get('/', 'VistaNoticiasController@seccion_noticias');
   // return view('pagina/index', 'VistaNoticiasController@seccion_noticias');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/noticias', 'NoticiasController');
Route::resource('/blog', 'VistaNoticiasController');