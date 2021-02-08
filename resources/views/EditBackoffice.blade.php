@extends('Layout.back')
@section('content')
@if(!isset($products))
    le produit n'existe pas!
@else
    <div class="card container">
        <div class=" descpCanada">
            <img src="{{ ($products['image']) }}" alt="Voyage banner" class="photo">
            <h1 class ='r-titre'>name: {{ $products['name'] }}</h1>
            <h2 id="price">price: {{ $products['price'] }}</h2>
            <h2 id="price"> weight :{{ $products['weight'] }}</h2>
            <h2 id="price">quantity :{{ $products['quantity'] }}</h2>
            <h2 id="price">id :{{ $products['categorie_id'] }}</h2>
            <h2 class="description"> description :{{ $products['description'] }}</h2>
        </div>
    </div>

    <div class="container text-white">
        <form action="/backoffice/{{ $products['id'] }}/edit" method="POST" class="form-example">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="create">Nom de l'article</label>
                <input  type="text" class="form-control" name="name" placeholder="Nom de l'article">
            </div>
            <div class="form-group">
                <label for="create">Description de l'article</label>
                <textarea required="required" class="form-control" name="description" rows="4" placeholder="Description de l'article"></textarea>
            </div>
            <div class="form-group">
                <label for="create">Prix de l'article</label>
                <input required="required" type="number" class="form-control" name="price" placeholder="Prix de l'article">
            </div>
            <div class="form-group">
                <label for="create">Poids de l'article</label>
                <input required="required" type="number" class="form-control" name="weight" placeholder="Poids de l'article">
            </div>
            <div class="form-check">
                <input required="required" class="form-check-input" type="radio" name="create" value=1 id="flexRadioDefault1">
                <label class="form-check-label" for="create">
                    Oui
                </label>
            </div>
            <div class="form-check">
                <input required="required" class="form-check-input" type="radio" name="create" value=0 id="flexRadioDefault2" checked>
                <label class="form-check-label" for="create">
                    Non
                </label>
            </div>
            <div class="form-group">
                <label for="create">Image</label>
                <input required="required" type="text" class="form-control" name="image" placeholder="Url de l'image">
            </div>
            <div class="form-group">
                <label for="create">Numéro d'id de la catégorie</label>
                <input required="required" type="number" class="form-control" name="categorie_id" id="exampleFormControlInput1" placeholder="ID de la catégorie">
            </div>

            <div class="form-group">
                <label for="create">Quantité disponible</label>
                <input required="required" type="number" class="form-control" name="quantity" placeholder="1">
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    </div>
@endif
@endsection
