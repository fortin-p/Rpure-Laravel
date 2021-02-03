<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductByName extends Controller
{
    public function getData()
    {
        $products = Product::orderBy('name', 'asc')->get();
        return view('voyage')->with('products',$products);
    }

    public function getDataByPrice()
    {
        $products=Product::orderBy('price', 'asc')->get();
        return view('voyage')->with('products',$products);

    }

    public function getDataByNameAndPrice()
    {
        $products=Product::all('name','price');
        return view('voyage')->with('products',$products);

    }

}
