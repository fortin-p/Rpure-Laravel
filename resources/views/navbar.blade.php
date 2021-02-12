<head>

    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
</head>

<nav id="navbar">
    <div id="logo" href="/">
        <img src="{{asset('images/logo.png')}}">
    </div>
    <div id="nav-title">
        <ul id="nav-items">
            <li id="nav-one">
                <a class="" href="/home">Accueil</a>
                <hr class="hr-hover">

            </li>
            <li id="nav-two">
                <a class="" href="/voyage">Voyages</a>
                <hr class="hr-hover">
            </li>
            <li id="nav-three">
                <a class="" href="/products">Boutique</a>
                <hr class="hr-hover">
            </li>
            <li id="nav-four">
                <a class="" href="#" >Contact</a>
                <hr class="hr-hover">
            </li>
            <li id="nav-five">
                <a class="" href="/cart/{id}">Panier</a>
                <hr class="hr-hover">
            </li>
        </ul>
    </div>
    <div id="search-bar">
        <div id="search-line">
            <input type="text">
            <hr id="search-hr">
        </div>
        <div id="loupe">
            <a id="loupe-icone">
                <img src="{{asset('images/search.png')}}">
            </a>
        </div>
    </div>





    <x-slot name="content">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Logout') }}
            </x-dropdown-link>
        </form>
    </x-slot>


    <div id="user">
        @if(isset(Auth::user()->name))
            <form method="POST" action="{{ route('logout') }}">

                <div style="color : white; margin-top: 30px; font-size: 20px">{{ Auth::user()->name }}</div>
                @csrf
                <x-responsive-nav-link :href="route('logout')"
                                       onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-responsive-nav-link>
            </form>


        @else
            <a id="profile" href="/login">
                <img src="{{asset('images/avatar.png')}}">
            </a>
        @endif
    </div>
</nav>
