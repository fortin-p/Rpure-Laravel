
        @extends('layout.layout');
        @section('title')
        <title>Page d'Accueil R-pure</title>
        @endsection

    @section('content');
        <div class="bodyHomePage">
            <div class="image_lac_montagne ">
                <img src="{{ asset("images\header.png") }}" alt="Photo de lac au Canada entouré de montagnes">
            </div>

            <h1> Venez respirez l'air de nos Campagne, de nos Rivières, de nos Montagnes.</h1>

            <div class="caroussel">
                <div class="RCanada">
                    <img src={{ asset("images\carrousel_droite.png")}} alt="photo d'un lac en hiver avec un paysage enneigé">
                </div>
                <div class="RAlps">
                    <img src={{ asset("images\carrousel_gauche.png")}} alt= "photo des alpes avecla chaine de montagnes en fond surplombant un lac">
                </div>
            </div>

            @include('layout.bouteille');
                    <button type="button" class="button">Boutique</button>
                </p>
            </div>
        </div>

            @include('layout.FAQ')
    @endsection
