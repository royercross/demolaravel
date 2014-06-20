<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home','uses' => 'HomeController@index']);

//candidatos/desarrollador-backend/1
Route::get('candidatos/{slug}/{id}', ['as' => 'categoria','uses' => 'CandidatosController@categoria']);

//rogelio-noris/1
Route::get('{slug}/{id}', ['as' => 'candidato','uses' => 'CandidatosController@show']);

//nuevo usuario
Route::get('registro', ['as' => 'registro', 'uses' => 'UsersController@registro']);
Route::post('registro', ['as' => 'registrar', 'uses' => 'UsersController@registrar']);

//Opciones de usuario Logeado
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
