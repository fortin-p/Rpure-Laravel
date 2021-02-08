<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        return view('product-details');
    }

    public function product($id)
    {
        return view('product-list',['id' => $id]);
    }

    public function show()
    {

        $products = Product::all();
        return view('voyage',['products' => $products]);

    }

    public function store($id)
    {

        $products = Product::where('id', $id)->get();
        return view('product-list',['products' => $products]);

    }
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
