<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return 'liste des produits';
    }

    public function product($id)
    {
        return 'produit numéro :' .$id;
    }
}
