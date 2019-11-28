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
Route::resource('/user', 'UsuarioController');
Route::resource('/cliente', 'ClienteController');
Route::resource('/documentos', 'DocumentoController');
Route::resource('/', 'TaskController');

Route::get('/', 'TaskController@index');

Route::get('/documentos', 'DocumentoController@index');

Route::get('/perfil', 'TaskController@perfil');

Route::get('/turma', 'TaskController@turma');

Route::get('/grupo', 'TaskController@grupo');
