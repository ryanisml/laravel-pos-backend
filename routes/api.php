<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\Product;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);

// Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::apiResource('api-product', \App\Http\Controllers\Api\ProductController::class);
    // Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
    // Route::apiResource('categories', \App\Http\Controllers\Api\CategoryController::class);
    // Route::apiResource('orders', \App\Http\Controllers\Api\OrderController::class);
    // Route::apiResource('order-items', \App\Http\Controllers\Api\OrderItemController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
    // Route::apiResource('order-statuses', \App\Http\Controllers\Api\OrderStatusController::class);
// });
// Route::middleware('auth', ['except' => ['api-product']]);
Route::get('api-product', function(){
    return Product::orderBy('created_at', 'desc')->paginate();
});