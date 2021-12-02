<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('a', function(){

    
});
// estas rutas se pueden acceder sin proveer de un token válido.
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
// estas rutas requiren de un token válido para poder accederse.
Route::group(['middleware' => 'auth.jwt'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});