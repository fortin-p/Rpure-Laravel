<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view ('cart');
    }
    public function show($id)
    {

        $products = Product::where('id', $id)->get();
        return view('cart',['products' => $products]);

    }
}
