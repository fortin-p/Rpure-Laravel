<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_basket(Request $req)
    {
        $data=$req->input();
//      Session::put('basket', $req->article);
        $req->session()->put('basket', $data);

//        $article=$req->validated();
//        dd($req);
        return view ('cart');
    }
    public function display_basket()
    {
        return view ('cart');
    }
}
