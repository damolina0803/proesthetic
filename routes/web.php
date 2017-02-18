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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/usuario/registrar', 'usuarioController@create');
Route::post('/usuario/crear', 'usuarioController@save');

Route::resource('servicio','servicioController');
Route::resource('contrato','tipoContratoController');
Route::resource('clinica','clinicaController');
