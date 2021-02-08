<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BDDController extends Controller
{

    public function boutique()
    {

        $products = DB::select('SELECT * FROM products');

        return view('product',['products'=>$products]);
    }

    public function store($id)
    {
        $article = DB::select("SELECT * from products where id=" .$id);
        return view('product-list',['products'=>$article]);
    }
}
