@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@foreach ($products as $product)
<div class="container">
    <div class="productPicture">
        {{ $product->picture }}
    </div>
    <h2 class="productName">
        {{ $product->name }}
    </h2>

    <h1 class="productPrice">
        {{ $product->price }},€
    </h1>

    <p class="productDescription">
        {{ $product->description }}
    </p>

    <form action="store/{{ $product->id }}" method="GET">
    <button class="" type="submit" value="{{ $product->id }}">Details</button>
</div>
@endforeach

@endsection
