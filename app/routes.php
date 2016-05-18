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

Route::get('/', function()
{
	return View::make('administrador.plato.agregar');
});
Route::any('agregar/plato', 'PlatosController@agregarPlato');
Route::any('guardar/plato', 'PlatosController@guardarPlato');
Route::any('administrar/plato', 'PlatosController@listarPlatos');

Route::any('hola', 'HolaController@holac');
