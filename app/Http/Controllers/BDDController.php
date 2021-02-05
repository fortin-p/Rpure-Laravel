<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class BDDController extends Controller
{

    public function productPrice()
    {
        $products = Product::orderBy('price')
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

        $products = DB::select('SELECT * FROM products');

        return view('product', ['products' => $products]);
    }

    public function show($id)
    {
        $products = Product::find($id);
        //dd($products);
        return view('product-details', ['products' => $products]);
    }
}
