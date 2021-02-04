<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class BackofficeController extends Controller
{
    public function index()
    {
        $articles=Product::orderBy('name', 'asc')->get();
        return view('backoffice', ['articles'=>$articles]);
    }
    public function edit($id)
    {
        $article = Product::find($id);
        return view('backoffice_update',['article'=>$article]);
    }
    public function create()
    {
        return view('backoffice', ['edition'=>true]);
    }
    public function store(Request $request)
    {
        $save = Product::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'available' => $request->input('available'),
                'image' => $request->input('image'),
                'gender' => $request->input('gender'),
                'category_id' => $request->input('category_id'),
                'quantity' => $request->input('quantity'),
        ]);
        $save->save();
        return view('backoffice');
    }

    public function update(Request $request, $id)
    {
        $article = Product::find($id);
        foreach ($_POST as $key=>$value)
        {
            if(isset($_POST['name']))
            {
                $article->name = $request->input('name');
            }
            if(isset($_POST['description']))
            {
                $article->description = $request->input('description');
            }
            if(isset($_POST['price']))
            {
                $article->price = $request->input('price');
            }
            if(isset($_POST['weight']))
            {
                $article->weight = $request->input('weight');
            }
            if(isset($_POST['available']))
            {
                $article->available = $request->input('available');
            }
            if(isset($_POST['image']))
            {
                $article->image = $request->input('image');
            }
            if(isset($_POST['quantity']))
            {
                $article->quantity = $request->input('quantity');
            }
        }
        $article->category_id = $request->input('category_id');
        $article->save();
        $article=Product::find($id);
        return view('backoffice_update',['article'=>$article]);
    }
}
