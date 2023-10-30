<?php

use App\Http\Controllers\TuristasController;
use App\Http\Controllers\ViajesController;
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


# Obtener viajes disponibles
Route::apiResource ('/viajes/GetViajes',ViajesController::class);
Route::get ('/viajes/viajesById', [ViajesController::class,'ViajesById']);
Route::get ('/viajes/viajeDetalle',[ViajesController::class,'GetDetalleViajeTuristas']);
Route::post ('/turistas/AgregarTuristas', [TuristasController::class,'AgregarTurista']);
Route::post ('/turistas/buscarTuristas', [TuristasController::class,'BuscarTuristabyIdentificacion']);

