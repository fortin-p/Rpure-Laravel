@extends("Layout.layout")
@section('content')

    <img src="{{ asset('images/baniere_voyage.jpeg') }}" alt="Voyage banner" class="hero">
    <h1 class ='voyage_voyage'>@yield("titre")</h1>
    <div id="trait_dessus"><hr></div>

    @foreach ($products as $article)
            <div class="container">
                <div class="descpCanada">
                    <img src="{{ ($article->image) }}" alt="Voyage banner" class="photo">
                    <h1 class ='r-titre'>{{ $article->name }}</h1>
                    <h2 id="price">{{ $article->price }}</h2>
                    <p class="description">{{ $article->description }}</p>
                    <form action="voyage/{{$article->id}}" method="get">
                   <button class="detailsbutton" type="submit" value="{{$article->id}}">Details</button>
                    </form>
                    @yield("iconePanier")
                </div>
            </div>
    @endforeach


    @include('Layout.Bouteille')

@endsection
