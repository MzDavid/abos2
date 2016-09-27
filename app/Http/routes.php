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
Route::get('login', 'CategoriasController@login');
Route::get('registro', 'CategoriasController@signin');
Route::get('blog', 'CategoriasController@blog');
Route::get('practicas-izquierdo', 'CategoriasController@pleft');
Route::get('single', 'CategoriasController@single');
Route::get('single-practice', 'CategoriasController@singlepractice');
Route::get('recuperar-password', 'CategoriasController@forgotpass');

