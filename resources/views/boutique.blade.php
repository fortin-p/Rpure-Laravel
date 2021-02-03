@extends('Layout.layout')
@section('title')
    Votre Voyage | R-Pure
@endsection
@section('content')
    <h1 id="title-page">Boutique :</h1>
    <div id="grid-body">
    @foreach ($articles as $article)
        @include('Layout.article')
    @endforeach
    </div>
@endsection
