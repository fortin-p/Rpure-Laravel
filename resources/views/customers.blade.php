@extends("Layout.layout")
@section('content')
<table class="containerCustomer">
    @foreach($customers as $customer)

    <div class="card">
        <header class="card-header">
            <h3 class="card-title">{{$customer->first_name}}</h3>
            <h2 class="card-text">{{$customer->last_name}}</h2>
            <h4 class="card-adresse">
                {{$customer->address}}
                {{$customer->zip}}
                {{$customer->city}}
            </h4>
    </div>

        @foreach($customer->orders as $order)
        <h4 class="commande_number"> {{$order->number}}</h4>
        <h4 class="commande_number"> {{$order->date}}</h4>

        @endforeach
    @endforeach



@endsection
