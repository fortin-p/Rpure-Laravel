@extends('layout.backoffice')
@section('title')
        <title>Formulaire d'ajout d'article </title>
        @endsection
@section('content')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Formulaire de modification</h2>
    </div>
    <div class="panel-body">
        <form class="" action="/backoffice/update/{id}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nom du Produit</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name">
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description">
            </div>


            <div class="form-group">
                <label for="catID">ID</label>
                <input required='required' type="number" class="form-control" min="1" max="3" name="catID" placeholder="ID entre 1 et 3">
            </div>


            <div class="form-group">
                <label for="picture">Image</label>
                <input required='required' type="file"  class="form-control" name="picture" placeholder="image">
            </div>


            <div class="form-group">
                <label for="weight">Poids</label>
                <input required='required' type="number" class="form-control" name="weight" placeholder="poids">
            </div>


            <div class="form-group">
                <label for="quantity">Quantité</label>
                <input required='required' type="number" class="form-control" name="quantity" placeholder="quantité">
            </div>


            <div class="form-group">
                <label for="available">Disponible de suite ?</label>
                <div class="form-check">
                    <input required="required" class="form-check-input" type="radio" name="store" value=1 id="flexRadioDefault1">
                    <label class="form-check-label" for="store">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input required="required" class="form-check-input" type="radio" name="store" value=0 id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="store">
                        Non
                    </label>
                </div>


            <label for="Price"> Prix de vente de l'article :</label>
            <input required='required' type="number"  name="price" min="0"  placeholder="Prix en €">


            <button type="submit">Modifier l'article</button>
        </form>

</div>

@endsection
