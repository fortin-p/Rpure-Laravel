@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@foreach ($products as $product)
{{ $product->id }}
{{ $product->name }}
 {{ $product->description }}
{{ $product->price }}
{{ $product->picture }}
@endforeach

@endsection
