<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;


Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/voyage',[VoyageController::class,'voyage']);

Route::get('/nav',[VoyageController::class,'navbar']);

