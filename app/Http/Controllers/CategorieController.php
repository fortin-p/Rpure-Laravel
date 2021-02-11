<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function productCategorie()
    {
        $products = Product::with('Category')->get();
        return view('categorie', ['products' => $products]);
    }
}
