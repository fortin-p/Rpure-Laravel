@extends('Layout.layout')

@section('title')
    Boutique | R-pure
@endsection
@section('content')
    <div id="grid-body">
        @foreach ($articles as $article)
            @include('Layout.article')
        @endforeach
    </div>
@endsection
