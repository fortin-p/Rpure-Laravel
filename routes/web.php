<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ProductByName;
use App\Http\Controllers\backofficecontroller;


Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/voyage',[ProductController::class,'show']);
Route::get('/voyage/{id}',[ProductController::class,'store']);

route::get('/voyagename',[ProductController::class,'getData']);
route::get('/voyageprice',[ProductController::class,'getDataByPrice']);
route::get('/voyagenameandprice',[ProductController::class,'getDataByNameAndPrice']);

route::get('/backoffice',[backofficecontroller::class,'index']);
route::get('/backoffice/create',[backofficecontroller::class,'create']);
route::post('/backoffice/create',[backofficecontroller::class,'store']);

route::get('/backoffice/{id}/edit',[backofficecontroller::class,'edit']);
