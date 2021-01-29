<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home page';
    //return view('pages/homepage');

});

Route::get('/product', function () {
    return 'liste des produits';
   // return view('pages/listProduct');
});

Route::get('/product/{id}', function ($id) {
    return 'Fiche du produit :' .$id;
    //return view('pages/detailsproduct');
});

Route::get('/cart', function () {
    return 'Panier';
   // return view('pages/basket');
});
