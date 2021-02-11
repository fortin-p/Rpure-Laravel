@extends('layout.backoffice')
@section('title')
    <title> Page BackOffice</title>
@endsection
@section('content')

@foreach ($products as $product)
@if ($product->available == 0)
<h3>Ce produit est indisponible Actuellement</h3>
@endif

<div class="card-deck">
    <div class="card">
        <h2 class="productName">
            {{ $product->name }}

        </h2>
        <p class="productDescription">
            {{ $product->description }}
        </p>
        <div class="productPicture">
            {{ $product->picture }}
        </div>

        </div>

        <h1 class="productPrice">
            {{ $product->price }},€
        </h1>


        <p class="productCategorie">

        </p>


        <a href="product-details/{{ $product->id }}">
            <button>Details</button>
        </a>
        <form method="post" action="/backoffice/delete/{{$product->id}}">
            {{ csrf_field() }}
            @method('DELETE')
            <button type="submit">supprimer</button>
        </form>

        <a href="/backoffice/update/{{$product->id}}"> <button type="submit">modifier</button></a>

</div>

@endforeach

            <div class="card-deck">
                <div class="card">
                    <div class="card-header"><h3>Ajout Article</h3></div>
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
