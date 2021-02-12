<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\backofficecontroller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart/{id}',[CartController::class,'show']);
route::post('cart',[CartController::class,'store']);

Route::get('/voyage',[ProductController::class,'show']);
Route::get('/voyage/{id}',[ProductController::class,'store']);

route::get('/voyagename',[ProductController::class,'getData']);
route::get('/voyageprice',[ProductController::class,'getDataByPrice']);
route::get('/voyagenameandprice',[ProductController::class,'getDataByNameAndPrice']);

route::get('/backoffice',[backofficecontroller::class,'index'])->middleware('auth');;
route::get('/backoffice/create',[backofficecontroller::class,'create'])->middleware('auth');;
route::post('/backoffice_update',[backofficecontroller::class,'store'])->middleware('auth');;

route::get('/backoffice/{id}/edit',[backofficecontroller::class,'edit'])->middleware('auth');;
route::put('/backoffice/{id}/edit',[backofficecontroller::class,'update'])->middleware('auth');;
route::delete('/delete/{name}', [backofficecontroller::class,'delete'])->middleware('auth');;


route::get('/categorie/product/',[CategoriesController::class,'show'])->name('products.category');

route::get('/customer',[CustomerController::class,'show']);
