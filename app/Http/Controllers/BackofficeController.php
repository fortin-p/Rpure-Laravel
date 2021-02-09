<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;



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
        return view('backoffice', ['create'=>true]);
    }
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
       //dd($validated);
        if($validated)
        {
            $article = new Product;
            $article->name = $validated['name'];
            $article->description = $validated['description'];
            $article->price = $validated['price'];
            $article->weight = $validated['weight'];
            $article->available = $validated['available'];
            $article->image = $validated['image'];
            $article->category_id = $validated['category_id'];
            $article->quantity = $validated['quantity'];
            $article->save();
        }
        return view('backoffice_update', ['article'=>$article]);
    }

    public function update(StorePostRequest $request, $id)
    {
        $article = Product::find($id);
        $validated = $request->validated();

        $article->name = $validated['name'];
        $article->description = $validated['description'];
        $article->price = $validated['price'];
        $article->weight = $validated['weight'];
        $article->available = $validated['available'];
        $article->image = $validated['image'];
        $article->category_id = $validated['category_id'];
        $article->quantity = $validated['quantity'];

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
    public function customers()
    {
        $clients = Customer::with('order')->get();

        return view('customers',['clients' => $clients]);
    }
    public function categorie()
    {
        $products = Product::with('categorie')->get();
        return view('categorie',['products' => $products]);
    }
}
