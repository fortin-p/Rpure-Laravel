

        @extends('layout.layout');
        @section('content');

        <title>Page d'Accueil R-pure</title>

        <div class="bodyHomePage">
            <div class="image_lac_montagne ">
                <img src="{{ asset("images\header.png") }}" alt="Photo de lac au Canada entouré de montagnes">
            </div>

            <h1> Venez respirez l'air de nos Campagne, de nos Rivières, de nos Montagnes.</h1>

            <div class="caroussel">
                <div class="RCanada">
                    <img src={{ asset("images\carrousel_droite.png")}} alt="Annonce promotionelle">
                </div>
                <div class="RAlps">
                    <img src={{ asset("images\carrousel_gauche.png")}} alt= "Annonce promotionelle">
                </div>
            </div>

            @include('layout.bouteille');
                    <button type="button" class="button">Boutique</button>
                </p>
            </div>
        </div>

        <div class='container_FAQ'>
            <div>
                <h3>Qui sommes-nous ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse incidunt corporis expedita placeat voluptas totam ad in similique, reiciendis impedit tempore temporibus minima quae doloremque necessitatibus fugit explicabo? Reiciendis.
                        <button type="button" class="button">En savoir Plus</button>
                    </p>
            </div>
            <div>
                <h3>Nos Valeurs</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi illum neque necessitatibus! Non culpa minus ipsum molestiae assumenda ipsam possimus rerum facilis, nemo tempora, ea fugit doloribus corporis similique molestias!
                    <button type="button" class="button">En savoir Plus</button>
                </p>
            </div>
            <div>
                <h3>FAQ</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. In vero architecto similique beatae iste pariatur tenetur ab ducimus laboriosam tempore! Dicta, laudantium. Ex ipsum quaerat nisi aliquam, voluptates hic fugit.
                    <button type="button" class="button">En savoir Plus</button>

                </p>

            </div>

            @endsection
