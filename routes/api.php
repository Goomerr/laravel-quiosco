<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ExtrasController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    //**Pedidos */
    Route::apiResource('/pedidos', PedidoController::class);

    //Productos y categorías
    Route::apiResource('/categorias', CategoriaController::class);
    Route::apiResource('/productos', ProductoController::class);
    Route::apiResource('/ingredientes', IngredienteController::class);
    Route::apiResource('/extras', ExtrasController::class);
});



//**Autenticación */
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');