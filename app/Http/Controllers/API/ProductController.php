<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::with('categorie')->get();
        return response()->json(
            $products
        );
    }
    public function details($id)
    {
$products = Product::with('categorie')->where('id', $id)->get();
        return response()->json(
            $products
        );


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (Product::create($request->all())){
           return response()->json([
                   'success' => 'Le produit a été créé'
               ]
           );
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products = Product::find($id);
        if ($products->update($request->all())){
            return response()->json([
                    'success' => 'Le produit a été modifier'
                ]
            );
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product,$id)
    {
        $product = Product::find($id);
        if ($product->delete()) {
            return response()->json([
                    'success' => 'Le produit a été supprimer'
                ]
            );
        }
    }
}
