<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class VoyageController extends Controller
{
    public function voyage()
    {

        $products = Product::all();
        return view('voyage')
            ->with('products', $products);
    }

    public function store($id)
    {

        $article = Product::where('id', $id)->get();
        return view('product-list')
            ->with('products', $article);
    }
}
