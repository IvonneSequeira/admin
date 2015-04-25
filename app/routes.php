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
	return View::make('hello');
});

Route::get('hola_mundo' , array('before'=> 'validar', function() 
{
	return 'Hola mundo';
}));

Route :: get('segmento_a/segmento_b',function()
{
	return 'Multiples segmentos';
});

Route :: get('usuario/{id}', function($id){
	return 'Mostrar el usuario con el id:'.$id;
}) ->where ('id','[0-9]+');

Route :: get('salir', function()
{
	return 'Salir del sistema';
});

Route::get('Hola', function()
{
	return View::make('pruebita');
});



Route:: get('Registrar','UsuariosController@Registrar');
Route:: post('registrar','UsuariosController@registrar_db'); //post sera el metodo que estara procesndo los datos que se ingresaran en el form

