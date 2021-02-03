<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ProductByName;


Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/voyage',[VoyageController::class,'voyage']);
Route::get('/voyage/{id}',[VoyageController::class,'store']);

route::get('/voyagename',[ProductByName::class,'getData']);
route::get('/voyageprice',[ProductByName::class,'getDataByPrice']);
route::get('/voyagenameandprice',[ProductByName::class,'getDataByNameAndPrice']);
