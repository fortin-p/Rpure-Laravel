<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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

    public function store(Request $request)
    {
//        $request->validated();
        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image = $request->input('image');
        $product->categorie_id = $request->input('categorie_id');
        $product->quantity =$request->input('quantity');
        $product->available = 1;
//        $product->save();
        return response()->redirectTo('cart');
    }
}
