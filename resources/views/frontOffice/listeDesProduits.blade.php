@extends('layout/public_layout')

@section('title', 'Produits')

@section('content')

      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
         <h2>Catalogue</h2>
         @if(Request::path() === 'listeProduits/check')
            <a href="{{ route('listeProduits','sort-by-name') }}">Trier par nom
            </a>
         @elseif(Request::path() === 'listeProduits/sort-by-name')
         <a href="{{ route('listeProduits','sort-by-cat') }}">Trier par catégorie
            </a>
         @else
            <a href="{{ route('listeProduits','check') }}">Trier par prix croissant
            </a>
         @endif
         <!-- Formulaire appelle le programme panier.php pour lui soumettre les cases cochées -->
         
               <!-- Affiche tous les articles contenuent dans le tableau -->
               @foreach ($products as $product)
               @if($product->is_ACTIVE == 1)
                   <form method = "POST" action ="{{route('store-panier',['id'=>$product->id_PRODUCT])}}">
                      @csrf
                      <!-- DEBUT Affiche 1 article -->
                      <div class="container-article">

                         <!-- Affiche l'image de l'article -->
                         <div class="container-left">
                          {{$product->NAME}}
                          {{$product->category->NAME}}
                         <a href="{{route('ficheProduit', ['id'=>$product->NAME])}}">
                          <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
                          </a>
                         </div>

                         <div class="container-right">
                            <!-- Affiche le nom et le prix de l'article -->
                            {{$product->PRICE}}cents

                            <!-- Quantité -->
                         <input type="number" name="quantity" value="1" min="0" max="{{$product->STOCK}}" required/>

                            <!-- Ajouter au panier -->
                         <button class="btn btn-light" type="submit" value="">Ajouter au panier</button>
                         </div>
                      </div>

                      <!-- FIN Affiche 1 article -->
                   </form>
               @endif
               @endforeach

            
      </div>

@endsection