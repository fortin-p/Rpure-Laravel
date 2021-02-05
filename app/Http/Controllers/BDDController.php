<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//On déclare le model
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class BDDController extends Controller
{

    public function productPrice()
    {
        //On appel notre model Product
        $products = Product::orderBy('price', 'asc')
            ->get();
        return view('product', ['products' => $products]);
    }

    public function product()
    {

        $products = Product::orderBy('name')
            ->get();
        return view('product', ['products' => $products]);
    }

    public function boutique()
    {

        $products = product::get();

        return view('product', ['products' => $products]);
    }

    public function show($id)
    {
        $products = Product::find($id);
        //dd($products);
        return view('product-details', ['products' => $products]);
    }
}
