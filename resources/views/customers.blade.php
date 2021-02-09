@extends('Layout.back')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Adress</th>
        <th scope="col">City</th>
        <th scope="col">Postal Code</th>
    </tr>
    </thead>
    <tbody>
@foreach ($customers as $customer)
    <tr>
        <td>{{$customer->first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->adress}}</td>
        <td>{{$customer->city}}</td>
        <td>{{$customer->posta}}l</td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection
