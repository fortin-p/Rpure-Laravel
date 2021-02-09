@extends("Layout.layout_backoffice")
@section('title')
    Produit n°{{$article->id}} | R-Pure
@endsection
@section('content')
<div id="grid-body">
    @include('Layout.article_backoffice')
</div>
<div class="container text-white">
    <form action="/backoffice/{{$article->id}}/edit" method="POST" class="form-example">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
            <label for="name">Nom de l'article</label>
            <input type="text" class="form-control" name="name" value="{{$article->name}}">
        </div>
        <div class="form-group">
            <label for="description">Description de l'article</label>
            <textarea class="form-control" name="description" rows="4">{{$article->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix de l'article</label>
            <input type="number" class="form-control" name="price" value="{{$article->price}}">
        </div>
        <div class="form-group">
            <label for="weight">Poids de l'article</label>
            <input type="number" class="form-control" name="weight" value="{{$article->weight}}">
        </div>
        <label>Disponible : </label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="available" value=1 id="flexRadioDefault1">
            <label class="form-check-label" for="available">
                Oui
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="available" value=0 id="flexRadioDefault2" checked>
            <label class="form-check-label" for="available">
                Non
            </label>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" value="{{$article->image}}">
        </div>
        <div class="form-group">
            <label for="category_id">Numéro d'id de la catégorie</label>
            <input required="required" type="number" class="form-control" name="category_id" value="{{$article->category_id}}">
        </div>
        <div class="form-group">
            <label for="quantity">Quantité disponible</label>
            <input  type="number" class="form-control" name="quantity" value="{{$article->quantity}}">
        </div>
        <button class="btn btn-primary" type="submit">Ajouter l'article</button>
    </form>
</div>
@endsection
