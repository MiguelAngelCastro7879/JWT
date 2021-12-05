<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\DistController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

$response = Http::get('http://example.com');

Route::get('/a', function(){

    return "<h1>hola</h1>";
});
// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
// estas rutas requiren de un token válido para poder accederse.
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::prefix('puerta')->group(function () {
    Route::get( '/datos', [PuertaController::class, 'datos']);
    Route::get( '/last', [PuertaController::class, 'ultimoDato']);
    Route::get( '/controller', [PuertaController::class, 'controlador']);
});

Route::prefix('distancia')->group(function () {
    Route::get( '/datos', [DistController::class, 'datos']);
    Route::get( '/last', [DistController::class, 'ultimoDato']);
});
Route::prefix('dht')->group(function () {
    Route::get( 'temperatura/datos', [PuertaController::class, 'datosPuerta']);
    Route::get( 'temperatura/last', [PuertaController::class, 'datosPuerta']);
    Route::get( 'humedad/datos', [PuertaController::class, 'datosPuerta']);
    Route::get( 'humedad/last', [PuertaController::class, 'datosPuerta']);
});