@extends("Layout.layout")
@section('title')
    Rpure - Panier
@endsection
@section('titre')
    Votre Panier d’air
@endsection

@section('content')
<h1 class ='voyage_voyage'>@yield("titre")</h1>

{{dd(session('basket')['article'])}}
@foreach(session('basket')['article'] as $article => $value)
    <div class="containerbasket">
        <img src="{{ asset('images/canada.jpg') }}" alt="Voyage banner" class="photoBasket">
        <div class="childBasket">
            <h3>Un voyage unique au canada vous attend</h3>
            <p>Descriptions :</p>
            <ul style="list-style-type:circle">
                <h4>Pack medium :</h4>
                <li>2 bouteilles d'AIR</li>
                <li>1 spray nasales</li>
                <li>1 carte postale</li>
            </ul>
        </div>
    </div>
@endforeach
@endsection
