<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\BackofficeController;



Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/voyage',[VoyageController::class,'voyage']);
Route::get('/voyage/{id}',[VoyageController::class,'specVoyage']);

Route::get('/boutique',[BoutiqueController::class,'boutique']);
Route::get('/boutique/{id}',[BoutiqueController::class,'specarticle']);

Route::get('/boutiqueprice',[BoutiqueController::class,'boutiqueprice']);
Route::get('/boutiquename',[BoutiqueController::class,'boutiquename']);


Route::get('/backoffice',[BackofficeController::class,'index']);
Route::post('/backoffice',[BackofficeController::class,'store']);

Route::get('/backoffice/create',[BackofficeController::class,'create']);
Route::get('/backoffice/{id}/edit',[BackofficeController::class,'edit']);
Route::post('/backoffice/{id}/edit',[BackofficeController::class,'update']);

Route::post('/backoffice/create', [BackofficeController::class, 'store']);

