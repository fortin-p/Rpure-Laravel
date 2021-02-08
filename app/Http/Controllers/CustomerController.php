<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show()
    {
        $clients = Customer::with('order')->get();
        return view('Customer',['clients' => $clients]);

    }
}
