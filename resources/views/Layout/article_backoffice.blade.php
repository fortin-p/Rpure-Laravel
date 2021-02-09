<div class="body-card">
    <form action="/backoffice/{{$article->id}}/edit" method="get">
        <div class="" style="align-items: center">
            <div class="col-6">
                <img src="{{$article->image}}" style="height: 20rem" alt="{{$article->name}}">
            </div>
            <div class="card-txt">
                <div class="col-6">
                    <h2>{{$article->name}}</h2>
                    <h3>{{$article->price}}€</h3>
                    <p>Weight: {{$article->weight}}</p>
                    <p>{{$article->description}}</p>
                </div>
            </div>

                <button class="detailsbutton" type="submit" value="{{$article->id}}">Modifier l'article</button>
            </div>
    </form>
    <form action="/backoffice/delete/{{$article->id}}" method="POST">
        {{csrf_field()}}
        @method('DELETE')
        <button name="delete" class="btn btn-primary" type="submit">Supprimer l'article </button>
    </form>
</div>
