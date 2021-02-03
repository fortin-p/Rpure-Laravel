<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoyageController extends Controller
{
    public function voyage()
    {

        $products = DB::select('select * from products');
        return view('voyage')
            ->with('products', $products);
    }

    public function store($id)
    {

        $article = DB::select("SELECT * from products where id=".$id);
        return view('product-list')
            ->with('products', $article);
    }
}

