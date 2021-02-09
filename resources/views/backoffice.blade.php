@extends("Layout.layout_backoffice")
@if(isset($articles))
    @section('title')
        Tous les produits | R-Pure
    @endsection
    @section('content')
        <div id="grid-body">
        @foreach ($articles as $article)
            @include('Layout.article_backoffice')
        @endforeach
        </div>
    @endsection
@endif
@if(isset($create))
    @section('title')
        Créer un produit | R-Pure
    @endsection
    @section('content')
        @include('Layout.create_backoffice')
    @endsection
@endif
