@extends("Layout.layout")
@section('content')
    @foreach($clients as $client)

{{--        {{dd($clients)}}--}}
        <div class="card-group">
            <div class="card">

                <div class="card-body">
                    <h5 class="r-titre card-title">{{$client->first_name}}, {{$client->last_name}}</h5>
                    <p class="card-text">{{$client->adresse}}</p>
                    <p class="card-text">{{$client->order->number}}</p>
                    <p class="card-text"><small class="text-muted">{{$client->zip_code}}</small></p>
                </div>
            </div>


    @endforeach
@endsection
