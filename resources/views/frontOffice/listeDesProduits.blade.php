@extends('layout/public_layout')

@section('title', 'Produits')

@section('content')
      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
          <h2>Catalogue</h2>

          <!-- MENU DEROULANT -->
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Trier par
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route('listeProduitsTrie', ['type'=> "nom"])}}">Nom</a>
                  <a class="dropdown-item" href="{{route('listeProduitsTrie', ['type'=> "prixAsc"])}}">Prix Croissant</a>
                  <a class="dropdown-item" href="{{route('listeProduitsTrie', ['type'=> "prixDesc"])}}">Prix Décroissant</a>
              </div>
          </div>

         <!-- Formulaire appelle le programme panier.php pour lui soumettre les cases cochées -->
            <form method = "POST" action = "panier.php"> 

               <!-- Affiche tous les articles contenuent dans le tableau -->
               @foreach ($produits as $key=>$produit)
            
                  <!-- DEBUT Affiche 1 article -->
                  <div class="container-article">

                     <!-- Affiche l'image de l'article -->
                     <div class="container-left">       		
                     <a href="{{route('ficheProduit',['id'=>$produit -> id])}}">
                        <img src="{{asset($produit->image)}}" alt = "Stan Smith">
                     </a>
                     </div>
                     
                     <div class="container-right">
                        <!-- Affiche le nom et le prix de l'article -->
                        <a href="{{route('ficheProduit',['id'=>$produit -> id_produit])}}">
                           <h2>{{$produit->nom ."\n"}}</h2>
                        </a>
                         <p>{{$produit -> prix /100}} €</p>
                        
                        <!-- Quantité -->
                        <input type="number" name="quantity[{{$key}}]" value="1" min="0" max="10" required/>

                        <!-- Case à cocher -->
                        <label for="case">Ajouter au panier</label>
                        <input type="checkbox" name="add_to_basket[]" value="{{$key}}">
                     </div>
                  </div>

                  <!-- FIN Affiche 1 article -->
                  
               @endforeach

            <!-- Envoie du formulaire -->
            {{-- <button type="button" class="btn btn-secondary btn-lg" value="to_order">Commander</button> --}}
            <button type="submit" value="to_order">Commander</button>
            </form>
      </div>


      {{--<div class="container">--}}
          {{--<div class="card-deck mb-3 text-center">--}}
          {{--@foreach ($produits as $key=>$produit)--}}
              {{--<div class="card mb-4 shadow-sm">--}}
                  {{--<div class="card-body">--}}
                      {{--<img src="{{asset($produit->image)}}" alt = "Stan Smith">--}}
                      {{--<h2>{{$produit->nom ."\n"}}</h2>--}}
                      {{--<p>{{$produit -> prix /100}} €</p>--}}
                      {{--<input type="number" name="quantity[{{$key}}]" value="1" min="0" max="10" required/>--}}
                      {{--<label for="case">Ajouter au panier</label>--}}
                      {{--<input type="checkbox" name="add_to_basket[]" value="{{$key}}">--}}

                      {{--<button type="button" class="btn btn-lg btn-block btn-outline-primary">Commander</button>--}}
                  {{--</div>--}}
              {{--</div>--}}
          {{--@endforeach--}}
          {{--</div>--}}
      {{--</div>--}}

@endsection