<?php

use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\ApiController;
use App\Http\Resources\RestauranteResource;
use App\Models\Restaurante;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/asocrest/restaurantes', function () {
//     return RestauranteResource::collection(Restaurante::paginate(3));
// });

Route::get('/asocrest/restaurantes', [ApiController::class, 'ver']);
Route::get('/asocrest/restaurantes/{id}', [ApiController::class, 'info']);
Route::get('/asocrest/platos/{categoria}', [ApiController::class, 'porCategoria']);
Route::get('/asocrest/platos/{id}', [ApiController::class, 'plato']);
Route::get('/asocrest/cliente/{dni}', [ApiController::class, 'cliente']);
Route::get('/asocrest/cliente/{dni}/pedidos', [ApiController::class, 'pedidos']);
Route::get('/asocrest/cliente/{dni}/pedidos/{id}', [ApiController::class, 'pedidoId']);

Route::put('/asocrest/restaurantes', [ApiController::class, 'addRest']);
Route::put('/asocrest/restaurantes/{id}/plato', [ApiController::class, 'addPlato']);

Route::delete('/asocrest/restaurantes/{id}', [ApiController::class, 'addRest']);
Route::delete('/asocrest/restaurantes/{id}/platos/{id2}', [ApiController::class, 'addRest']);
