<?php

namespace App\Http\Controllers;

use App\Models\{Customer, order};
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $clients = Order::with('Customer')->get();
        return view('Customer',['clients' => $clients]);

    }
}
