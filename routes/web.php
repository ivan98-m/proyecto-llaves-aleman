<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//      return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts.login');
// });

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
// Route::get('dashboard/facturacion', function () {
//     return view('facturacion');
// });
Route::get('dashboard/domicilios', function () {
    return view('domicilios');
});
// Route::get('trabajos', function () {
//     return view('trabajos');
// });
// Route::get('proveedores', function () {
//     return view('proveedores');
// });

//------------------uso de controladores 

//Route::get('dash', '\App\Http\Controllers\DashController@getIndex');

//Route::get('cliente', '\App\Http\Controllers\ClientesController@getIndex');
//Route::get('cliente/editar/{id}', '\App\Http\Controllers\ClientesController@getEdit');

//Route::get('inventario', '\App\Http\Controllers\InventarioController@getIndex');
//Route::get('inventario/editar', '\App\Http\Controllers\InventarioController@getEdit');
//Route::get('inventario/agregar', '\App\Http\Controllers\InventarioController@getAdd');

// Route::get('ventas', '\App\Http\Controllers\VentasController@getIndex');

// Route::get('trabajadores', '\App\Http\Controllers\TrabajadoresController@getIndex');

// Route::get('trabajos', '\App\Http\Controllers\TrabajosController@getIndex');

// Route::get('proveedores', '\App\Http\Controllers\ProveedoresController@getIndex');

//-----------------------------------------------------------------------------

Route::get('/', [App\Http\Controllers\DashController::class, 'getIndex'])->name('login');

Route::prefix('dashboard')->middleware('auth')->group(function (){
    Route::get('/', [DashController::class, 'getIndex']);
    //-----------------clientes----------------
    Route::get('clientes', [ClientesController::class, 'getIndex']);
    Route::post('create', [ClientesController::class, 'createCliente'])->name('cliente.create');
    Route::put('clientes/{id}', [ClientesController::class, 'putEdit'])->name('cliente.update');
    Route::delete('delete/{id}', [ClientesController::class, 'deleteCliente'])->name('cliente.delete');

    //-----------------inventario----------------
    Route::get('inventario', [InventarioController::class, 'getIndex']);
    Route::post('inventario/create', [InventarioController::class, 'createProduct'])->name('product.create');
    Route::put('inventario/create/{id}', [InventarioController::class, 'editProduct'])->name('product.edit');
    Route::delete('inventario/delete/{id}', [InventarioController::class, 'deleteProduct'])->name('product.delete');

    //-----------------------facturacion-----------
    Route::get('facturacion', function () {
        return view('facturacion.facturacion');
    });

    Route::get('facturacion/compras', [ComprasController::class, 'getIndex']);
    Route::get('facturacion/compras/create', [ComprasController::class, 'createCompra'])->name('compra.create');

    Route::delete('facturacion/compras/delete/{id}', [ComprasController::class, 'deleteCompra'])->name('compra.delete');

    Route::get('facturacion/compras/detalle/{id}', [ComprasController::class, 'getCompraDetalle']);
    //-----------------ventas----------------
    Route::get('/ventas', '\App\Http\Controllers\VentasController@getIndex');

    //-----------------trabajadores----------------
    Route::get('/trabajadores', '\App\Http\Controllers\TrabajadoresController@getIndex');

    //-----------------trabajos----------------
    Route::get('/trabajos', '\App\Http\Controllers\TrabajosController@getIndex');

    //-----------------proveedores----------------
    Route::get('proveedores', [ProveedoresController::class, 'getIndex']);
    Route::post('proveedores/create', [ProveedoresController::class, 'createProveedores'])->name('proveedores.create');
    Route::put('proveedores/{id_proveedor}', [ProveedoresController::class, 'editProveedores'])->name('proveedores.update');
    Route::delete('proveedores/delete/{id_proveedor}', [ProveedoresController::class, 'deleteProveedores'])->name('proveedores.delete');
});

Auth::routes();

