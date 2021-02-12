@extends('layout.backoffice')
@section('title')
        <title>Formulaire d'ajout d'article </title>
        @endsection
@section('content')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Formulaire d'ajout d'article</h2>
    </div>
    <div class="panel-body">

        <form class="" action="/resultFormulaire" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nom du Produit</label>
                <input type="text" class="form-control" name="name" placeholder="Product Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Description">
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


                <div class="form-group">
                    <label for="catID">category_id</label>

                            <select class="form-control" id="category_id" name="category_id">

                                <option value=""> Veuillez choisir l'ID </option>

                                @foreach($categories as $categorie)

                                    <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>

                                @endforeach

                            </select>

                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                </div>


            {{-- <div class="form-group">
                <label for="catID">ID</label>
                <input type="number" class="form-control" min="1" max="3" name="catID" placeholder="ID entre 1 et 3">
                @error('catID')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div> --}}


            <div class="form-group">
                <label for="picture">Image</label>
                <input type="file"  class="form-control" name="picture" placeholder="image">
                @error('picture')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="form-group">
                <label for="weight">Poids</label>
                <input  type="number" class="form-control" name="weight" placeholder="poids">
                @error('weight')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="form-group">
                <label for="quantity">Quantité</label>
                <input  type="number" class="form-control" name="quantity" placeholder="quantité">
            </div>


            <div class="form-group">
                <label for="available">Disponible de suite ?</label>
                <div class="form-check">
                    <input  class="form-check-input" type="radio" name="available" value=1 id="flexRadioDefault1">
                    <label class="form-check-label" for="store">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <input  class="form-check-input" type="radio" name="available" value=0 id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="store">
                        Non
                    </label>
                </div>


            <label for="Price"> Prix de vente de l'article :</label>
            <input type="number"  name="price"   placeholder="Prix en €">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


            <button type="submit">Ajout de l'article</button>
        </form>

</div>

@endsection
