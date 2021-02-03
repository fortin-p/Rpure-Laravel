<form action="boutique/{{$article->id}}" method="get">
   <div class="body-card">
        <div class="" style="align-items: center">
            <div class="col-6">
                <img src="{{$article->image}}" style="height: 20rem" alt="{{$article->name}}">
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
            </div>
        </div>
    </div>
</form>
