<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

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


Route::middleware('auth:api')->get('/products', function (Request $request) {
    return $request->user();
});

Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'details']);

Route::post('/products/create', [ProductController::class, 'store']);

Route::put('/products/edit/{id}', [ProductController::class, 'update']);
Route::delete('/products/delete/{id}', [ProductController::class, 'delete']);

