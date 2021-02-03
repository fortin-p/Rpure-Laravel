<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoyageController extends Controller
{
    public function voyage() {

        $products = DB::select('select * from products');
           return view ('voyage')
               ->with('products', $products);
        }






//    public function voyage()
//    {
//        return view ('voyage');
//    }
}

