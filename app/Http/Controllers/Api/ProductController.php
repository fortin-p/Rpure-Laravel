<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Product::orderBy('name', 'asc')->get();
        return view('boutique', ['articles'=>$articles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {

        $validated = $request->validated();
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
        return view('backoffice_update', ['article'=>$article]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
