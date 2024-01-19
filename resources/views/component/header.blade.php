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
            <div class="dropdown">
                <button class="btn bold btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </button>
                <div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route("liste_vehicule") }}">Gestion des véhicules</a>
                  <a class="dropdown-item" href="{{ route("liste_clients") }}">Gestion des clients</a>
                  <a class="dropdown-item" href="{{ route("gerer_reservation") }}">Gerer les réservations</a>
                </div>
              </div>
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
@if(session()->get("success"))
    <div class="alert alert-success" style="margin-bottom:30px">
        {{ session()->get("success") }}
    </div>
@endif
@if(session()->get("error"))
    <div class="alert alert-danger" style="margin: 30px">
        {{ session()->get("error") }}
    </div>
@endif
