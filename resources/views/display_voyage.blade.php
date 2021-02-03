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
    {{--    </div>--}}
    {{--    <div class="containerCaraibes">--}}
    {{--        <div class="descpCaraibes">--}}

    {{--            <img src="{{ asset('images/caraibes.jpg') }}" alt="Voyage banner" class="photo">--}}
    {{--            <h1 class ='r-titre'>{{ 'name' }}</h1>--}}
    {{--            <h2 id="price">3400 €</h2>--}}
    {{--            <p class="description">Le sable chaud, l’odeur du poisson, profiter de cette expédition pour revenir au SOURCE</p>--}}
    {{--            @yield('detailsButton')--}}
    {{--            @yield("iconePanier")--}}

    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="containerAlpes">--}}
    {{--        <div class="descpAlpes">--}}

    {{--            <img src="{{ asset('images/Alpes.jpg') }}" alt="Voyage banner" class="photo">--}}
    {{--            <h1 class ='r-titre'>R-Alpes</h1>--}}
    {{--            <h2 id="price">4800 €</h2>--}}
    {{--            <p class="description">Marre de la pollution? Cette expédition est ce qu’il vous faut, profitez de l’air FRAIS</p>--}}
    {{--            @yield('detailsButton')--}}
    {{--            @yield("iconePanier")--}}

    {{--        </div>--}}
    {{--    </div>--}}

    @include('Layout.Bouteille')

@endsection
