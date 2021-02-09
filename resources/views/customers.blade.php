@extends("Layout.layout_backoffice")
@section('content')
    <div id="grid-body">
    @foreach($clients as $client)

{{--        {{dd($client->order)}}--}}
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h5 class="r-titre card-title">{{$client->first_name}} {{$client->last_name}}</h5>
                    <p class="card-text blue ">Adresse : {{$client->adress}}</p>
                    <p class="card-text blue">Ville : {{$client->city}}</p>
                    <p class="card-text blue">Code postal : {{$client->postal}}</p>
                    <p class="card-text blue">Nombre de commandes : {{$client->order->count()}}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
