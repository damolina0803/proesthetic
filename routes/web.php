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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/usuario/registrar', 'usuarioController@create');
Route::post('/usuario/crear', 'usuarioController@save');
Route::get('servicio/get', 'servicioController@getData');

Route::resource('servicio','servicioController');
Route::resource('contrato','tipoContratoController');
Route::resource('clinica','clinicaController');
Route::resource('usuario','usuarioController');

Route::resource('insumo','insumoController');

Route::resource('servicioTipoContrato','servicioTipoContratoController');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

<<<<<<< HEAD
Route::resource('/proveedor', 'proveedorController');

Route::resource('/ordendeproduccion', 'ordendeproduccionController');
=======

<<<<<<< HEAD
>>>>>>> e1bac586f63620a05412c8fe6f3f87d7a474ebf3
=======
Route::resource('/proveedor', 'proveedorController');

Route::resource('/ordendeproduccion', 'ordendeproduccionController');
>>>>>>> German
