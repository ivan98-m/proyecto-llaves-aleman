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
    return view('auth.login');
});

Route::get('login', function () {
    return view('login');
});

// Route::get('dash', function () {
//     return view('dash.index');
// });
// Route::get('cliente', function () {
//     return view('clientes.cliente');
// });
// Route::get('inventario', function () {
//     return view('inventarios.inventario');
// });
// Route::get('inventario/editar', function () {
//     return view('inventarios.edit_inventario');
// });
// Route::get('ventas', function () {
//     return view('ventas');
// });
// Route::get('trabajadores', function () {
//     return view('trabajadores');
// });
Route::get('facturacion', function () {
    return view('facturacion');
});
Route::get('domicilios', function () {
    return view('domicilios');
});
// Route::get('trabajos', function () {
//     return view('trabajos');
// });
// Route::get('proveedores', function () {
//     return view('proveedores');
// });

//uso de controladores 
Route::get('dash', '\App\Http\Controllers\DashController@getIndex');

Route::get('cliente', '\App\Http\Controllers\ClientesController@getIndex');
Route::get('cliente/editar/{id}', '\App\Http\Controllers\ClientesController@getEdit');

Route::get('inventario', '\App\Http\Controllers\InventarioController@getIndex');
Route::get('inventario/editar', '\App\Http\Controllers\InventarioController@getEdit');
Route::get('inventario/agregar', '\App\Http\Controllers\InventarioController@getAdd');

Route::get('ventas', '\App\Http\Controllers\VentasController@getIndex');

Route::get('trabajadores', '\App\Http\Controllers\TrabajadoresController@getIndex');

Route::get('trabajos', '\App\Http\Controllers\TrabajosController@getIndex');

Route::get('proveedores', '\App\Http\Controllers\ProveedoresController@getIndex');

Auth::routes();


