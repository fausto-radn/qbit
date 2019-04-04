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

Route::resource('proveedores','ProveedorController');
Route::resource('productos','ProductoController');
Route::resource('servicios','ServicioController');
//Route::resource('anuncios','AnuncioController');
//Route::resource('autores','AutorController');


route::get('/',function (){
    return view('proveedores.create');
});
