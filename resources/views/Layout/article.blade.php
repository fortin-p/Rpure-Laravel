<div class="card" style="width: 18rem;">
    <div class="" style="align-items: center">
        <form action="boutique/{{$article->id}}" method="get">
        <div class="col-6">
            <img class="card-img-top" src="{{$article->image}}" style="height: 20rem" alt="{{$article->name}}">
        </div>
        <div class="card-txt">
            <div class="col-6">
                <h2>{{$article->name}}</h2>
                <h3>{{$article->price}}€</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Weight: {{$article->weight}}</p>
            </div>
            <div class="col-6">
                <p>{{$article->description}}</p>
            </div>
            <button class="detailsbutton" type="submit" value="{{$article->id}}">Details</button>
            </form>
        <form action="/boutique/panier"  method="POST">
            <button class="detailsbutton" type="submit" value="articles[{{$article->id}}]">Details</button>
        </form>
    </div>
    </div>
</div>
