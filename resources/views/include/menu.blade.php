<div class="content">
        <div class="links">
        <a href="{{route('accueil') }}">Accueil</a>
            <a href="{{route('listeProduits', 'check') }}">Produits</a>
            <a href="{{route('panier') }}">Panier</a>
            <a href="{{route('monCompte') }}">Mon compte</a>
            @if(Auth::user() && Auth::user() -> is_admin == true)
                <a href="{{route('gestionCommandes') }}">Admin</a>
            @endif
        </div>
    </div>