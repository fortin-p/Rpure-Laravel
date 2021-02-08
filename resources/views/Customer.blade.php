@extends("Layout.layout")
@section('content')
    @foreach($clients as $client)

{{--        {{dd($client->customer)}}--}}
        <div class="card-group">
            <div class="card">

                <div class="card-body">
                    <h5 class="r-titre card-title">{{$client->customer->first_name}}, {{$client->customer->last_name}}</h5>
                    <p class="card-text">{{$client->customer->adresse}}</p>
                    <p class="card-text">{{$client->number}}</p>
                    <p class="card-text"><small class="text-muted">{{$client->zip_code}}</small></p>
                </div>
            </div>


    @endforeach
@endsection
