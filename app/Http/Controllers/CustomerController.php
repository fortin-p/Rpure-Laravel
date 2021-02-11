<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerOrder()
    {
        $customer = Customer::with('order')->get();
        return view('customers', ['customers' => $customer]);
    }
}
