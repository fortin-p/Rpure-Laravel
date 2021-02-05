@extends('layout.layout')
@section('title')
    Rpure - liste produits
@endsection
@section('content')

<p>Produit numéro : {{$products->id}}</p>

<p class="productDescription">
    {{ $products->description }}
</p>

<div class="container">

    <div class="productPicture">
        {{ $products->picture }}
    </div>

    <h2 class="productName">
        {{ $products->name }}
    </h2>

    <h1 class="productPrice">
        {{ $products->price }},€
    </h1>

    <a href="cart/{{ $products->id }}">
        <button>Ajouter au panier</button>
    </a>
</div>

@endsection


