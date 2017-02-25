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



Route::get('servicio/get', 'servicioController@getData');
Route::get('contrato/get', 'tipoContratoController@getData');
Route::get('proveedor/get', 'proveedorController@getData');



Route::resource('servicio','servicioController');
Route::resource('contrato','tipoContratoController');
Route::resource('clinica','clinicaController');
<<<<<<< HEAD
Route::resource('usuario','usuarioController');

Route::resource('insumo','insumoController');

Route::resource('servicioTipoContrato','servicioTipoContratoController');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

=======
<<<<<<< HEAD
Route::resource('usuario','usuarioClinicaController');
Route::resource('proveedor', 'proveedorController');
Route::resource('insumo','insumoController');
Route::resource('servicioTipoContrato','servicioTipoContratoController');
Route::resource('pedido','pedidoController');

Route::resource('produccion', 'ordendeproduccionController');
=======
Route::resource('usuario','usuarioController');
Route::resource('insumo','insumoController');
Route::resource('servicioTipoContrato','servicioTipoContratoController');
>>>>>>> 00509984aaddcbe9d7c7229a09aaa558d2cf9576
Route::resource('/proveedor', 'proveedorController');
Route::resource('/ordendeproduccion', 'ordendeproduccionController');


<<<<<<< HEAD
=======
>>>>>>> a45d82313358004a13c04e7e93a97669f959a8b4
>>>>>>> 00509984aaddcbe9d7c7229a09aaa558d2cf9576
