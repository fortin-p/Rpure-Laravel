<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product, Customer};

class backofficecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::orderBy('name', 'asc')->get();
        return view('backoffice',['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice',['value'=>true]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =[
            'products' =>[
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'image' => $request->input('image'),
                'categorie_id' => $request->input('categorie_id'),
                'quantity' => $request->input('quantity'),

            ],

        ];
    $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->image = $request->input('image');
        $product->categorie_id = $request->input('categorie_id');
        $product->quantity =$request->input('quantity');
        $product->available = 1;
        $product->save();
        return view('backoffice_update',$data);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        return view('EditBackoffice',['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->weight = $request->input('weight');
        $products->image = $request->input('image');
        $products->categorie_id = $request->input('categorie_id');
        $products->quantity =$request->input('quantity');
        $products->save();
        return redirect('/backoffice');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($name)
    {
        Product::where('name', $name)->delete();

        return view('backoffice');
    }

    public function customers()
    {
        $customers=Customer::get();
        return view('customers', ['customers'=>$customers]);
    }
}
