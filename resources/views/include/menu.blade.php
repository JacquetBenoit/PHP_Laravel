    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Boutique</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{route('accueil') }}">Accueil <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('listeProduits') }}">Liste des produits</a>
            <a class="nav-item nav-link" href="{{route('ficheProduit','carotte') }}">Fiche produit</a>
            <a class="nav-item nav-link" href="{{route('panier') }}">Panier</a>
          </div>
        </div>
      </nav>
