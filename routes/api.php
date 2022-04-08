<?php

use App\Http\Controllers\APIClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1/cliente')->middleware('auth.basic.once')->group(function (){
    Route::get('/', [APIClienteController::class, 'index']);
    Route::get('/{id}', [APIClienteController::class, 'show']);
    Route::post('/',[APIClienteController::class, 'store']);
    Route::put('/{id}',[APIClienteController::class, 'update']);
    Route::delete('/{id}',[APIClienteController::class, 'destroy']);
});