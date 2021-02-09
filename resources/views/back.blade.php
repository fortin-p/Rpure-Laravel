@extends('layout.backoffice')
@section('title')
    <title> Page BackOffice</title>
@endsection
@section('content')

@foreach ($products as $product)
@if ($product->available == 0)
<p>Ce produit est indisponible Actuellement</p>

@endif

<div class="container">
    <form method="post" action="/backoffice/delete/{{$product->id}}">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit">supprimer</button>
    </form>

    <a href="/backoffice/update/{{$product->id}}"> <button type="submit">modifier</button></a>


    <div class="productPicture">
        {{ $product->picture }}
    </div>
    <h2 class="productName">
        {{ $product->name }}
    </h2>

    <h1 class="productPrice">
        {{ $product->price }},€
    </h1>

    <p class="productDescription">
        {{ $product->description }}
    </p>

    <a href="/backoffice/product-details/{id}{{ $product->id }}">
        <button>Details</button>
    </a>

</div>
@endforeach

            <div class="card-deck">
                <div class="card">
                    <div class="card-header">Ajout Article</div>
                    <div class="card-body">
                        <h3 class="card-title">Remplisser votre boutique</h5>
                        <p class="card-text">Ajouter des produit à votre produit grâce à notre Formulaire.</p>

                    </div>
                    <a href="/backoffice/formulaire">
                        <button>Ajouter un article</button>
                    </a>

            </div>
        </div>

@endsection
