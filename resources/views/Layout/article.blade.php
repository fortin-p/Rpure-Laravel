<div class="body-card">
    <form action="/panier" method="post">
        @csrf
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
            <label>Quantité souhaité</label>
            <input type="number" name="article[{{$article->id}}]" value="1" min="1" placeholder="1">
            <input type="hidden" name="article[name]" value="{{$article->name}}">
            <input type="hidden" name="article[price]" value="{{$article->price}}">
            <input type="hidden" name="article[weight]" value="{{$article->weight}}">
            <input type="hidden" name="article[image]" value="{{$article->image}}">

            <button  type="submit">Ajouter au panier</button>
        </div>
    </form>
</div>
