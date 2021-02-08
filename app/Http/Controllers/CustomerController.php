<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $clients = Order::with('customer')->get();
        return view('Customer',['clients' => $clients]);

    }
}
