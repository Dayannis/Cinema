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

Route::get('/', ['as' => 'principal', 'uses' => 'FrontController@index']);
//Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');
Route::get('logout','LogController@logout');
Route::get('generos','GeneroController@listing');
Route::get('password/email','Auth\PasswordController@getEmail');
Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');
Route::post('password/email','Auth\PasswordController@postEmail');
Route::resource('mail','MailController');
Route::resource('usuario','UsuarioController');
Route::resource('genero','GeneroController');
Route::resource('pelicula','MovieController');
Route::resource('log','LogController');



