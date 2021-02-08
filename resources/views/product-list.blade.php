@extends('Layout.layout')
@section('title')
    Rpure - produit
@endsection
@section('content')
    @foreach ($products as $article)
        <img src="{{ ($article->image) }}" alt="Voyage banner" class="photo">
        <div class="container">
            <h1 class ='r-titre'>{{ $article->name }}</h1>
            <h2 id="price">{{ $article->price }}</h2>
            <p class="description">{{ $article->description }}</p>
        </div>
    @endforeach
@endsection




