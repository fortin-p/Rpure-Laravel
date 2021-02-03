<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class voyageController extends Controller
{

    public function voyage()
    {

        $products = DB::select('select*from products');

        return view('voyage')
            ->with('products', $products);
    }
}
