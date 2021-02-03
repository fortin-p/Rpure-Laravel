<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class BoutiqueController extends Controller
{
    public function boutique()
    {
        $articles=Product::all()->sortBy('name')        ;
        return view('boutique')->with('articles', $articles);
    }
    public function specarticle($id)
    {
        $articles = Product::where('id', $id)->get();
        return view('boutique')->with('articles', $articles);
    }
    public function boutiqueprice()
    {
        $articles=Product::all()->sortBy('price')        ;
        return view('boutique')->with('articles', $articles);
    }
    public function boutiquename()
    {
        $articles=Product::all('name', 'price')->sortBy('name')        ;
        return view('boutique')->with('articles', $articles);
    }
}
