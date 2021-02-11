@extends('Layout.layout')
@section('content')
    @foreach ($products as $article)
        <div class="container">
            <div class="descpCanada">
                <img src="{{ ($article->image) }}" alt="Voyage banner" class="photo">
                <h1 class ='r-titre'>{{ $article->name }}</h1>
                <h2 id="price">{{ $article->price }}</h2>
                <p class="description">{{ $article->description }}</p>
                <p class="description">{{ $article->categorie->name }}</p>
                <form action="voyage/{{$article->id}}" method="get">
                    <button class="detailsbutton" type="submit" value="{{$article->id}}">Details</button>
                </form>
                <a href="/cart/{{$article->id}}"> <img src="{{ asset('images/Panier.png') }}" value="'{{$article->id}}" alt="panier" class="panier"> </a>
            </div>
        </div>
    @endforeach

@endsection
