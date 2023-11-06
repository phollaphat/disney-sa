<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
Route::get('orders/report', [OrderController::class, 'orderWithReceipt']);
Route::post('products/reduceItems', [ProductController::class, 'ReduceProductQTY']);
Route::post('orders/setStatus', [OrderController::class, 'setOrderStatus']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('productLists', 'App\Http\Controllers\ProductListController');
Route::resource('orders', 'App\Http\Controllers\OrderController');
Route::resource('customers', 'App\Http\Controllers\CustomerController');
Route::resource('receipts', 'App\Http\Controllers\ReceiptController');
Route::resource('WarrantyCards', 'App\Http\Controllers\WarrantyCardController');
Route::resource('claims', 'App\Http\Controllers\ClaimController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});




