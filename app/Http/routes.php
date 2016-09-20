<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index/index');
});

Route::get('nosotros', 'CategoriasController@nosotros');
Route::get('areas', 'CategoriasController@areas');
Route::get('contacto', 'CategoriasController@contacto');
Route::get('reconocimientos', 'CategoriasController@reconocimientos');
Route::get('temporal', 'CategoriasController@temporal');
Route::get('nosotros', 'CategoriasController@nosotros');

