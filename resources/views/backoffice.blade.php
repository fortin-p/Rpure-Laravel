@extends("Layout.layout_backoffice")

@section('content')
<h1 id="title-page">BackOffice :</h1>
@if(isset($articles))
    <a href="/backoffice/create"><button>Créer un nouvel article</button></a>
    <div id="grid-body">
    @foreach ($articles as $article)
        @include('Layout.article_backoffice')
    @endforeach
    </div>
@endif

@endsection
