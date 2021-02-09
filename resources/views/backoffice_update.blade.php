@extends("Layout.layout_backoffice")

@section('content')
<h1 id="title-page">BackOffice :</h1>
<a href="/backoffice/create"><button>Créer un nouvel article</button></a>
<br><br>
<a href="/backoffice"><button>Retour à la liste des produits</button></a>
<div id="grid-body">
    @include('Layout.article_backoffice')
</div>

<div class="container text-white">
    <form action="/backoffice/{{$article->id}}/edit" method="POST" class="form-example">
        {{csrf_field()}}
        @method('put')
        <div class="form-group">
            <label for="create['name']">Nom de l'article</label>
            <input type="text" class="form-control" name="name" placeholder="Nom de l'article">
        </div>
        <div class="form-group">
            <label for="create['description']">Description de l'article</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Description de l'article"></textarea>
        </div>
        <div class="form-group">
            <label for="create['price']">Prix de l'article</label>
            <input type="number" class="form-control" name="price" placeholder="Prix de l'article">
        </div>
        <div class="form-group">
            <label for="create['weight']">Poids de l'article</label>
            <input type="number" class="form-control" name="weight" placeholder="Poids de l'article">
        </div>
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
            <input type="text" class="form-control" name="image" placeholder="Url de l'image">
        </div>
        <div class="form-group">
            <label for="category_id">Numéro d'id de la catégorie</label>
            <input required="required" type="number" class="form-control" name="category_id" placeholder="ID de la catégorie">
        </div>
        <div class="form-group">
            <label for="quantity">Quantité disponible</label>
            <input  type="number" class="form-control" name="quantity" placeholder="1">
        </div>
        <button class="btn btn-primary" type="submit">Ajouter l'article</button>
    </form>
</div>
