<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\Api\ProductController;



Route::get('/',[HomeController::class,'index']);

//Route::get('/product',[ProductController::class,'listProduct']);
//Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/panier',[CartController::class,'display_basket']);
Route::post('/panier',[CartController::class,'add_basket']);

Route::get('/voyage',[VoyageController::class,'voyage']);
Route::get('/voyage/{id}',[VoyageController::class,'specVoyage']);

Route::get('/boutique',[BoutiqueController::class,'index']);
Route::get('/boutique/{id}',[BoutiqueController::class,'specarticle']);

Route::get('/boutiqueprice',[BoutiqueController::class,'boutiqueprice']);
Route::get('/boutiquename',[BoutiqueController::class,'boutiquename']);



Route::get('/backoffice/{id}/edit',[BackofficeController::class,'edit']);
Route::put('/backoffice/{id}/edit',[BackofficeController::class,'update']);

Route::get('/backoffice/create',[BackofficeController::class,'create']);
Route::post('/backoffice/create',[BackofficeController::class,'store']);

Route::get('/backoffice/delete/', [BackofficeController::class, 'delete']);
//Route::post('/backoffice/delete/', [BackofficeController::class, 'delete']);
Route::delete('/backoffice/delete/{id}', [BackofficeController::class,'delete']);

Route::get('/backoffice/customers/', [BackofficeController::class, 'customers']);
Route::get('/backoffice/categorie/', [BackofficeController::class, 'categorie']);


///* ------------------ API ------------------ */
//
//
//Route::get('products',[ProductController::class, 'index']);
//Route::get('/products/{id}', [ProductController::class, 'details']);
//
//Route::post('/products/create', [ProductController::class, 'store']);
//
//Route::put('/products/edit/{id}', [ProductController::class, 'update']);
//Route::delete('/products/delete/{id}', [ProductController::class, 'delete']);

/* ------------------ AUTH ------------------ */
//Route::apiResource('products',ProductController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/backoffice',[BackofficeController::class,'index']);
Route::post('/backoffice',[BackofficeController::class,'store']);
