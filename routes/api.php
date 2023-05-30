<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\IngresoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/categoria', [CategoriaController::class, 'list']);
Route::get('/categoria/{id}', [CategoriaController::class, 'getById']);

Route::get('/gasto', [GastoController::class, 'list']);
Route::get('/gasto/{id}', [GastoController::class, 'getById']);

Route::get('/ingreso', [IngresoController::class, 'list']);
Route::get('/ingreso/{id}', [IngresoController::class, 'getById']);
});

Route::post('/login', [AuthController::class, 'login']);