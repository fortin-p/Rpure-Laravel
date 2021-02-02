
@extends('layout.layout');
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

             <div class="inclus_voyage">Inclus dans nos voyages :</div>

        <div class="container_bouteille ">

            <img src={{ asset("images\Bouteille.png")}} alt="Photo d'une bouteille d'R-pure">

            <div class="texte_bouteille">
                <p>Dans chacune de nos  expéditions, il est possible de repartir avec un  souvenir.
                    <h5> Ramenez l’air pur à la maison <h5><br />

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

