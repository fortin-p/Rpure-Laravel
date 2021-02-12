<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/',[HomeController::class,'index']);

Route::get('/product',[ProductController::class,'listProduct']);
Route::get('/product/{id}',[ProductController::class,'product']);

Route::get('/cart/{id}',[CartController::class,'show']);
route::post('cart',[CartController::class,'store']);

Route::get('/voyage',[ProductController::class,'show']);
Route::get('/voyage/{id}',[ProductController::class,'store']);

route::get('/voyagename',[ProductController::class,'getData']);
route::get('/voyageprice',[ProductController::class,'getDataByPrice']);
route::get('/voyagenameandprice',[ProductController::class,'getDataByNameAndPrice']);

route::get('/backoffice',[backofficecontroller::class,'index']);
route::get('/backoffice/create',[backofficecontroller::class,'create']);
route::post('/backoffice_update',[backofficecontroller::class,'store']);

route::get('/backoffice/{id}/edit',[backofficecontroller::class,'edit']);
route::put('/backoffice/{id}/edit',[backofficecontroller::class,'update']);
route::delete('/delete/{name}', [backofficecontroller::class,'delete']);


route::get('/categorie/product/',[CategoriesController::class,'show'])->name('products.category');

route::get('/customer',[CustomerController::class,'show']);
