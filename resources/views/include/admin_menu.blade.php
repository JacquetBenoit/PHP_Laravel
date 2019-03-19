<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="{{route('gestionCommandes')}}">commandes</a>
            <a class="nav-item nav-link" href="{{route('gestionUtilisateurs')}}">utilisateurs</a>
            <a class="nav-item nav-link" href="{{route('gestionPromos')}}">promos</a>
            <a class="nav-item nav-link" href="{{route('gestionProduits')}}">produits</a>
              <a class="nav-item nav-link" href="{{route('accueil')}}">Accueil</a>
          </div>
        </div>
      </nav>