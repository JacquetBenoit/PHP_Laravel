@extends('layout/public_layout')

@section('title', 'Produits')

@section('content')
@if(Request::path() === 'listeProduits/check')
  <a href="{{ route('listeProduits','sort-by-name') }}">Trier par nom
  </a>
@else
  <a href="{{ route('listeProduits','check') }}">Trier par prix croissant
  </a>
 @endif
      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
         <h2>Catalogue</h2>
         <!-- Formulaire appelle le programme panier.php pour lui soumettre les cases cochées -->
            <form method = "POST" action = "panier.php"> 

               <!-- Affiche tous les articles contenuent dans le tableau -->
               @foreach ($products as $product)
            
                  <!-- DEBUT Affiche 1 article -->
                  <div class="container-article">

                     <!-- Affiche l'image de l'article -->
                     <div class="container-left">       		
                      {{$product->NAME}}
                     <a href="{{route('ficheProduit', ['id'=>$product->NAME])}}">
                      <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
                      </a>
                     </div>
                     
                     <div class="container-right">
                        <!-- Affiche le nom et le prix de l'article -->
                        {{$product->PRICE}}cents
                        
                        
                        <!-- Quantité -->
                        <input type="number" name="quantity" value="1" min="0" max="10" required/>

                        <!-- Case à cocher -->
                        <label for="case">Ajouter au panier</label>
                        <input type="checkbox" name="add_to_basket[]" value="#">
                     </div>
                  </div>

                  <!-- FIN Affiche 1 article -->
                  
               @endforeach

            <!-- Envoie du formulaire -->
            {{-- <button type="button" class="btn btn-secondary btn-lg" value="to_order">Commander</button> --}}
            <button type="submit" value="to_order">Commander</button>
            </form>
      </div>

@endsection