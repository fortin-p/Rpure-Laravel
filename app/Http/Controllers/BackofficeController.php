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
        return view('create_backoffice');
    }
    public function store(Request $request)
    {
        $article = new Product;
        $article->name = $request->input('name');
        $article->description = $request->input('description');
        $article->price = $request->input('price');
        $article->weight = $request->input('weight');
        $article->available = $request->input('available');
        $article->image = $request->input('image');
        $article->category_id = $request->input('category_id');
        $article->quantity = $request->input('quantity');
        $article->save();
        return view('backoffice_update', ['article'=>$article]);
    }

    public function update(Request $request, $id)
    {
        $article = Product::find($id);

        foreach ($_POST as $key=>$value)
        {
            if($_POST['name'] != NULL)
            {
                $article->name = $request->input('name');
            }
            if($_POST['description'] != NULL)
            {
                $article->description = $request->input('description');
            }
            if($_POST['price'] != NULL)
            {
                $article->price = $request->input('price');
            }
            if($_POST['weight'] != NULL)
            {
                $article->weight = $request->input('weight');
            }
            if($_POST['available'] != NULL)
            {
                $article->available = $request->input('available');
            }
            if( $_POST['image'] != NULL)
            {
                $article->image = $request->input('image');
            }
            if($_POST['quantity'] != NULL)
            {
                $article->quantity = $request->input('quantity');
            }
        }
        $article->category_id = $request->input('category_id');
        $article->save();
        $article=Product::find($id);
        return view('backoffice_update',['article'=>$article]);
    }
//    public function delete(Request $request)
//    {
//        if(isset($_POST['delete']))
//        {
//             $article = Product::find($request->input('delete'));
//             $article->delete();
//        }
//        $articles=Product::orderBy('name', 'asc')->get();
//        return view('backoffice', ['articles'=>$articles]);
//    }
    public function delete($id)
    {
        Product::find($id)->delete();

        return redirect('backoffice');
    }
}
