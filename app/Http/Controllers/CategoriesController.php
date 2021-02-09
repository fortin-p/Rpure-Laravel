<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;



class CategoriesController extends Controller
{
    public function show()
    {
        $products = Product::with('categorie')->get();
        return view('Categorie',['products' => $products]);

    }


}
