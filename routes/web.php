<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BDDController;

//route vers la HomePage
Route::get('/', [HomeController::class, 'index']);

/*Route::get('/product', [ProductController::class, 'listProduct']);
Route::get('/product/{id}', [ProductController::class, 'product']);*/

Route::get('/cart', [CartController::class, 'cart']);

//Route vers page voyage
Route::get('/voyage', [VoyageController::class, 'voyage']);
Route::get('/voyage/{id}', [VoyageController::class, 'specVoyage']);


//Affichage des page Details produit
Route::get('/product-details/{id}', [BDDController::class, 'show']);

//Affichage du Catalogue
Route::get('/boutique', [BDDController::class, 'productPrice']);
//          /boutique est le nom qu'on lui donne, 'productPrice' = nom de la méthode.

//Route::get('/backoffice', [BDDController::class, 'boutique']);
