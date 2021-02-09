@extends("Layout.layout")
@section('content')
    @foreach($clients as $client)
        <div class="card-group">
            <div class="card">

                <div class="card-body">
{{--                    <h5 class="r-titre card-title">{{$client->first_name}}, {{$client->last_name}}</h5>--}}
{{--                    <p class="card-text">{{$client->adresse}}</p>--}}

{{--                    <p scope="row" class="row card-text">Commande numero : {{count($order->number)}}</p>--}}

{{--                    <p class="card-text"><small class="text-muted">{{$client->zip_code}}</small></p>--}}
                </div>
            </div>


            <table class="containerCustomer">
                <thead>
                <tr>
                    <th><h1>First name</h1></th>
                    <th><h1>Last name</h1></th>
                    <th><h1>adresse</h1></th>
                    <th><h1>Commande numero :</h1></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->last_name}}</td>
                    <td>{{$client->adresse}}</td>

                    <td>@foreach($client->order as $order){{$order->number}}   @endforeach</td>


                </tbody>
            </table>


    @endforeach
@endsection
