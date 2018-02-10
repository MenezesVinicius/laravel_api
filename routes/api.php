<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('usuarios', 'UsuariosController@index');
 
Route::get('usuarios/{usuario}', 'UsuariosController@show');
  
Route::post('usuarios', 'UsuariosController@store');
 
Route::put('usuarios/{usuario}', 'UsuariosController@update');
 
Route::delete('usuarios/{usuario}', 'UsuariosController@delete');