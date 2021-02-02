<nav id="navbar">
    <div id="logo" href="/">
        <img src="{{asset('images/logo.png')}}">
    </div>
    <div id="nav-title">
        <ul id="nav-items">
            <li id="nav-one">
                <a class="" href="/">Accueil</a>
                <hr class="hr-hover">

            </li>
            <li id="nav-two">
                <a class="" href="#">Voyages</a>
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
                <a class="" href="/cart">Panier</a>
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
    <div id="user">
        <a id="profile" href="/profile">
            <img src="{{asset('images/avatar.png')}}">
        </a>
    </div>
</nav>
