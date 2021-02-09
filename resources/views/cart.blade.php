@extends("Layout.layout")
@section('title')
    Rpure - Panier
@endsection
@section('titre')
    Votre Panier d’air
@endsection

@section('content')
<h1 class ='voyage_voyage'>@yield("titre")</h1>
@foreach ($products as $article)
    <form action="/backoffice_update" method="POST" class="form-example">
        {{ csrf_field() }}
<div class="containerbasket">

    <img src="{{ $article->image }}" alt="Voyage banner" class="photoBasket">
    <div class="childBasket">
        <h3>{{ $article->description }}</h3>
        <h3>{{$article->price}}€</h3>

        <p>Descriptions :</p>
        <ul style="list-style-type:circle">
            <h4>Pack medium :</h4>
            <li>2 bouteilles d'AIR</li>
            <li>1 spray nasales</li>
            <li>1 carte postale</li>
        </ul>
        <div class="QuantityCart">
        <label for="quantity">Quantity :</label>
        <input  type="number" id="quantity" name="quantity" min="1" max="{{$article->quantity}}">
        </div>
    </div>
</div>
<button class="detailsbutton" type="submit">Commander</button>


</form>
@endforeach
@endsection
