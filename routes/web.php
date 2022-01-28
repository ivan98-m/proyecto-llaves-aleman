<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return view('login');
});

Route::get('dash', function () {
    return view('dash.index');
});
Route::get('cliente', function () {
    return view('cliente');
});
Route::get('inventario', function () {
    return view('inventario');
});
Route::get('ventas', function () {
    return view('ventas');
});
Route::get('trabajadores', function () {
    return view('trabajadores');
});
Route::get('facturacion', function () {
    return view('facturacion');
});
Route::get('domicilios', function () {
    return view('domicilios');
});
Route::get('trabajos', function () {
    return view('trabajos');
});
Route::get('proveedores', function () {
    return view('proveedores');
});