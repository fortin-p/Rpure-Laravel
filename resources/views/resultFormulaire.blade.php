@extends('layout.backoffice')
@section('title')
    <title> Résultat du Formulaire</title>
@endsection

@section('content')


<h3>Nom du produit</h3>
<p>valeur : <b>{{$article ['name'] }}</b></p>


<h3>Description du Produit</h3>
<p>valeur : <b>{{ $article['description'] }}</b></p>

<h3>ID</h3>
<p>valeur : <b>{{$article['id'] }}</b></p>

<h3>Image</h3>
<p>valeur : <b>{{$article['picture'] }}</b></p>

<h3>Poids</h3>
<p>valeur : <b>{{$article['weight'] }}</b></p>

<h3>Quantité</h3>
<p>valeur : <b>{{$article['quantity'] }}</b></p>

<h3>Disponible</h3>
<p>valeur : <b>{{$article['available'] }}</b></p>

<h3> Prix </h3>
<p>valeur : <b>{{ $article['price'], '€' }}</b></p>


<a href="/backoffice">
    <button>Retour à la boutique</button>
</a>

@endsection
