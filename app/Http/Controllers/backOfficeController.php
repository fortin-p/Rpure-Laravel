<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\categories;

class BackofficeController extends Controller
{

    // fonction pour aller sur /backoffice
    public function backoffice()
    {
        $products = Product::all();
        return view('back', ['products' => $products]);
    }


    //Fonction pour Formulaire
    public function create()
    {
        return view('formulaireAjout');
    }

    //fonction pour afficher le résultat du Formulaire
    public function store(Request $request)
    {

        // if ($request->input('catID') != null && 0 < $request->input('catID') && $request->input('catID') <= 3)
        {
            $product =  new Product;
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->id = $request->input('id');
            $product->picture = $request->input('picture');
            $product->weight = $request->input('weight');
            $product->quantity = $request->input('quantity');
            $product->available = $request->input('available');
            $product->category_id = $category_id = 1;
            $product->save();
            //$article = Product::find($product->id);

            return view('resultFormulaire', ['article' => $product]);
            //} else {

            return 'message error // Veuillez renseigner un ID entre 1 et 3';
        }
    }

    public function edit($id)
    {
        $products = Product::find($id);

        return view('resultFormulaire',['products' => $products]);

    }



    public function update(request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->picture = $request->input('picture');
            $product->weight = $request->input('weight');
            $product->quantity = $request->input('quantity');
            $product->available = 1;
            //$product->category_id = $category_id = 1;
            $product->save();

        return view('resultFormulaire',['article' => $product,  'id' => $id]);
    }

    public function updateFormulaire(request $request, $id)
    {
        $product = Product::find($id);
        return view('formulaireUpdate', ['product' => $product,  'id' => $id] );
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return response()->redirectTo('/backoffice');
    }
}
