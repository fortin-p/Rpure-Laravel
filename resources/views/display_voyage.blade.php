<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<img src="{{ asset('images/baniere_voyage.jpeg') }}" alt="Voyage banner" class="hero">
<h1 class ='voyage_voyage'>@yield('titre')</h1>
<div id="trait_dessus"><hr></div>
<div class="container">
    <div class="descpCanada">
        @yield('Voyage')
        <img src="{{ asset('images/canada.jpg') }}" alt="Voyage banner" class="photo">
        <h1 class ='r-titre'>R-Canada</h1>
        <h2 id="price">2400 €</h2>
        <p class="description">Venez profiter de l’air pur de nos lacs, notre air est garantie PUR</p>
        <button class="detailsbutton"
                type="button">
            Details
        </button>
      <a href=""> <img src="{{ asset('images/Panier.png') }}" alt="panier" class="panier"> </a>

    </div>
</div>
<div class="containerCaraibes">
    <div class="descpCaraibes">

        <img src="{{ asset('images/caraibes.jpg') }}" alt="Voyage banner" class="photo">
        <h1 class ='r-titre'>R-Caraibes</h1>
        <h2 id="price">3400 €</h2>
        <p class="description">Le sable chaud, l’odeur du poisson, profiter de cette expédition pour revenir au SOURCE</p>
        <button class="detailsbutton"
                type="button">
            Details
        </button>
        <img src="{{ asset('images/Panier.png') }}" alt="panier" class="panier">

    </div>
</div>

<div class="containerAlpes">
    <div class="descpAlpes">
        @yield('Voyage')
        <img src="{{ asset('images/Alpes.jpg') }}" alt="Voyage banner" class="photo">
        <h1 class ='r-titre'>R-Alpes</h1>
        <h2 id="price">4800 €</h2>
        <p class="description">Marre de la pollution? Cette expédition est ce qu’il vous faut, profitez de l’air FRAIS</p>

        <button class="detailsbutton"
                type="button">
            Details
        </button>
        <img src="{{ asset('images/Panier.png') }}" alt="panier" class="panier">

    </div>
</div>

</body>
</html>
