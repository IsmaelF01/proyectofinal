<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\VistaController;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $id = Auth::id();
    $user = User::find($id);
    return view('dashboard')->with('user', $user);
    // Route::get('/dashboad', [UserController::class, 'index']);
})->name('dashboard');



/*GRUPO INTRANET*/
Route::prefix('intranet')->middleware('auth')->group(function () {

    Route::group(['middleware' => 'role:grestaurante', 'prefix' => 'restaurante', 'as' => 'grestaurante'], function () {

        $id = Auth::id();
        $user = User::find($id);


        Route::get('/{id}/delete', [RestauranteController::class, 'destroy']);

        /*Platos*/
        Route::get('/{id}', [RestauranteController::class, 'indexPlatos']);
        Route::post('/{id}/plato', [RestauranteController::class, 'storePlato']);
        Route::get('/plato/{id}/delete', [RestauranteController::class, 'destroyPlato']);
        Route::Post('/{id}/edit', [RestauranteController::class, 'updatePlato']);
        Route::resource('/', RestauranteController::class);

        /*Pedido*/
        Route::get('/{id}/pedido', [RepartidorController::class, 'porRest']);
        Route::get('/{id}/pedido/{id_pedido}/cambiar', [RepartidorController::class, 'cambiaEstado']);
        Route::get('/{id}/pedido/delete', [RepartidorController::class, 'destroyPedido']);
    });

    Route::group(['middleware' => 'role:cliente', 'prefix' => 'cliente', 'as' => 'cliente'], function () {
        Route::get('/', function () {
            return view('intranet.clientes');
        });
    });

    Route::group(['middleware' => 'role:repartidor', 'prefix' => 'repartidor', 'as' => 'repartidor'], function () {
        Route::get('/{id}/delete', [RepartidorController::class, 'destroy']);
        Route::post('/{id}', [RepartidorController::class, 'update']);
        Route::get('/{id}/verplato', [RepartidorController::class, 'verPlatos']);
        Route::resource('/', RepartidorController::class);
    });
});

Route::prefix('/fooding')->middleware('auth')->group(function () {
    /*Restaurantes*/
    Route::get('/restaurantes', [VistaController::class, 'index']);
    Route::get('/restaurantes/{id}/acercade', [VistaController::class, 'show']);

    /*Platos*/
    Route::get('/restaurante/{id}', [VistaController::class, 'indexPlatos']);
    Route::get('/restaurante/{id}/{categoria}', [VistaController::class, 'indexPlatosCateg']);

    /*CARRITO*/
    Route::post('/restaurante/{id}/pedido/cart-add', [CartController::class, 'add']);
    Route::get('/restaurante/{id}/pedido/checkout', [CartController::class, 'cart']);
    Route::post('/restaurante/{id}/pedido/cart-removeitem', [CartController::class, 'removeitem']);
    Route::post('/restaurante/{id}/pedido', [CartController::class, 'store']);
});
