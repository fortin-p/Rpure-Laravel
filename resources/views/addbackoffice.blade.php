@section('content')

    <div class="container text-white">

        <form action="/backoffice_update" method="POST" class="form-example">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="create">Nom de l'article</label>
                <input  type="text" class="form-control" name="name" placeholder="Nom de l'article" >
                <span style="color: red">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="create">Description de l'article</label>
                <textarea  class="form-control" name="description" rows="4" placeholder="Description de l'article" ></textarea>
                <span style="color: red">@error('description'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="create">Prix de l'article</label>
                <input  type="number" class="form-control" name="price" placeholder="Prix de l'article" >
                <span style="color: red">@error('price'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="create">Poids de l'article</label>
                <input  type="number" class="form-control" name="weight" placeholder="Poids de l'article" >
                <span style="color: red">@error('weight'){{$message}}@enderror</span>
            </div>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="create" value=1 id="flexRadioDefault1">
                <label class="form-check-label" for="create">
                    Oui
                </label>
            </div>
            <div class="form-check">
                <input  class="form-check-input" type="radio" name="create" value=0 id="flexRadioDefault2" checked>
                <label class="form-check-label" for="create">
                    Non
                </label>
            </div>
            <div class="form-group">
                <label for="create">Image</label>
                <input  type="text" class="form-control" name="image" placeholder="Url de l'image" >
                <span style="color: red">@error('image'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="create">Numéro d'id de la catégorie</label>
                <input  type="number" class="form-control" name="categorie_id" id="exampleFormControlInput1" placeholder="ID de la catégorie" >
                <span style="color: red">@error('categorie_id'){{$message}}@enderror</span>
            </div>

            <div class="form-group">
                <label for="create">Quantité disponible</label>
                <input  type="number" class="form-control" name="quantity" placeholder="quantity" >
                <span style="color: red">@error('quantity'){{$message}}@enderror</span>
            </div>
            <button class="btn btn-primary" type="submit">Ajouter l'article</button>
        </form>
    </div>

@endsection
