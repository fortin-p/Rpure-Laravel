@extends('Layout.layout')
@section('title')
    Votre Voyage | R-Pure
@endsection
@section('content')
    <div id="header">
        <h1>R-Canada</h1>
        <div id="top-img">
            <img src="{{asset('images/canada.png')}}">
        </div>
    </div>
    <div id="right-bloc">
        <div id="infos-voyage">
            <h2>Conditions technique</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere arcu eget quam finibus, et blandit felis egestas. Vestibulum vehicula neque nec ornare consectetur. Mauris faucibus libero et leo fermentum, vel pretium dolor facilisis. Curabitur ac hendrerit nisi. Sed tristique iaculis nunc nec finibus. Donec pulvinar odio id mi iaculis pellentesque. Ut magna tortor, facilisis id elit sed, scelerisque elementum enim. Fusce magna neque, eleifend a semper ut, imperdiet a ex. Quisque eget ex est. </p>
            <a id="subscribe" href="#subscribe">
                <img src="{{asset('images/button-sub.png')}}">
            </a>
        </div>
        <div id="stars">
            <a id="avis" href="/avis">
                <img src="{{asset('images/star.png')}}">
            </a>
            <a id="avis" href="/avis">
                <img src="{{asset('images/star.png')}}">
            </a>
            <a id="avis" href="/avis">
                <img src="{{asset('images/star.png')}}">
            </a>
            <a id="avis" href="/avis">
                <img src="{{asset('images/star.png')}}">
            </a>
            <a id="avis" href="/avis">
                <img src="{{asset('images/star-white.png')}}">
            </a>
        </div>
    </div>
    <div id="central-text">
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus. </p>
        <br>
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus. </p>
        <br>
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus. </p>
        <br>
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus. </p>
    </div>
    <div id="travel-adds">
        <div id="bottles">
            <img id="b1" src="{{asset('images/Bouteille.png')}}">
            <img id="b2" src="{{asset('images/Bouteille.png')}}">
            <img id="b3" src="{{asset('images/Bouteille.png')}}">
        </div>
        <div id="text-bottle">
            <p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur mattis est in volutpat eleifend. Proin vitae ante in enim vestibulum pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ut nibh lacus. In in metus nisl. Ut commodo nunc sed orci placerat, eget elementum tortor scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed tristique eget lacus non congue. </p>
            <a href="/boutique">
                <img src="{{asset('images/boutique-btn.png')}}">
            </a>
        </div>
    </div>
    <h2 class="title-2">A propos du guide: </h2>
    <div class="alpiniste">
        <div id="img-resize">
        </div>
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus.
            tiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed.
        </p>
    </div>
    <h2 class="title-2">Avis le plus populaire : </h2>
    <div class="alpiniste">
        <p>Etiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed. Nunc luctus arcu ut finibus sodales. Donec quis dignissim urna, et faucibus dui. Pellentesque semper lorem lorem, non suscipit dui convallis tempor. Etiam eget dolor metus.
            tiam lorem nisl, mollis eget est sed, venenatis vulputate lectus. Phasellus at faucibus arcu. Sed sodales tellus odio, eu pharetra elit accumsan sed.
        </p>
    </div>
    <h2  class="title-2">Planning des displonibilité :</h2>
    <div id="affichage">
        <div id="#subscribe">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td>Janvier</td>
                    <td>Février</td>
                    <td>Mars</td>
                    <td>Avril</td>
                    <td>Mai</td>
                    <td>Juin</td>
                    <td>Juillet</td>
                    <td>Août</td>
                    <td>Septembre</td>
                    <td>Octobre</td>
                    <td>Novembre</td>
                    <td>Décembre</td>
                </tr>
                <tr>
                    <td>Semaine 1</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td>
                </tr>
                <tr>
                    <td>Semaine 2</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td
                </tr>
                <tr>
                    <td>Semaine 3</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td
                </tr>
                <tr>
                    <td>Semaine 4</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Non-Disponible</td>
                    <td>Disponible</td>
                    <td>Disponible</td
                </tr>
            </table>
        </div>
    </div>
@endsection
