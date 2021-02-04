<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function voyage()
    {
        return view ('voyage');
    }
    public function specVoyage()
    {
        return view('specvoyage');
    }
}
