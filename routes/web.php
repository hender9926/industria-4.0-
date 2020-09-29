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
    return view('layouts/index');
    //return view('auth/login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('productos', 'ProductosController');
Route::resource('pesajes', 'PesajesController');
Route::get('pesajes/procesando/{prod}', 'PesajesController@pesando')->name('pesajes.pesando');
Route::get('pesajes/valorpesado/{producto}','PesajesController@valorpesado')->name('pesajes.valorpesado');
Route::resource('notificaciones', 'NotificacionesController');
Route::resource('turnos', 'TurnosController');
Route::resource('/usuarios', 'UsuariosController');


