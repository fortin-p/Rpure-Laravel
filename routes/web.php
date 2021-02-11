<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\BDDController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\backOfficeController;
use App\Http\Controllers\CustomerController;

//route vers la HomePage
Route::get('/', [HomeController::class, 'index']);

/*Route::get('/product', [ProductController::class, 'listProduct']);
Route::get('/product/{id}', [ProductController::class, 'product']);*/

Route::get('/backoffice/product-details/cart/{id}', [CartController::class, 'cart']);

//Route vers page voyage
Route::get('/voyage', [VoyageController::class, 'voyage']);
Route::get('/voyage/{id}', [VoyageController::class, 'specVoyage']);


//Affichage des page Details produit
Route::get('/product-details/{id}', [BDDController::class, 'show']);

//Affichage du Catalogue
Route::get('/boutique', [BDDController::class, 'productPrice']);
//          /boutique est le nom qu'on lui donne, 'productPrice' = nom de la méthode.

//Route::get('/backoffice', [BDDController::class, 'boutique']);

//chemin vers la page backoffice
Route::get('/backoffice', [backOfficeController::class, 'backoffice']);

//Chemin vers la page backoffice/formulaire
Route::post('/resultFormulaire', [backOfficeController::class, 'store']);
Route::get('/backoffice/formulaire', [backOfficeController::class, 'create']);


//Chemin de ResultFormulaire Pour Delete et Update
Route::get('backoffice/update/{id}', [backOfficeController::class, 'updateFormulaire']);
Route::put('backoffice/update/{id}', [backOfficeController::class, 'update']);
Route::delete('backoffice/delete/{id}', [backOfficeController::class, 'delete']);

//Chemin pour afficher la Categorie
route::get('/categorie', [CategorieController::class, 'productCategorie'])->name('product.categorie');

//Chemin Pour afficher les lcients

route::get('/customer', [CustomerController::class, 'customerOrder']);
