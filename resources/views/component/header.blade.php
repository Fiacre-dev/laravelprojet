<header>
    <div class="logo">
        <h1>Auto<span>Rent.</span></h1>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('acceuil') }}" @class(["active" => request()->route()->getName() == "acceuil"])>Accueil</a></li>
            <li><a href="{{ route('catalogue') }}" @class(["active" => request()->route()->getName() == "catalogue"])>Catalogue</a></li>
            <li><a href="#">Give-Back</a></li>
            <li><a href="{{ route('contact') }}" @class(["active" => request()->route()->getName() == "contact"])>Contact</a></li>
        </ul>
    </nav>
    @guest
        <a href="{{ route('login') }}">Se connecter</a>
    @endguest
    @auth
        <a href="{{ route('logout') }}" id="logoutLink" title="Se déconnecter">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
    @endauth
</header>
