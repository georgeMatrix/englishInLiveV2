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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('controlEscolar', 'ControlEscolarController');
Route::resource('baseDeDatos', 'BaseDeDatosController');
Route::resource('calificaciones', 'CalificacionesController');
Route::resource('colegiaturas', 'ColegiaturaController');
Route::resource('certificaciones', 'CertificacionesController');
Route::resource('bajas', 'BajasController');