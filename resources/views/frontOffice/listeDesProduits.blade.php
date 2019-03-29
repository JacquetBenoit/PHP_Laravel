@extends('layout/public_layout')

@section('title', 'Produits')

@section('content')

      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
         <h2>Catalogue</h2>
         <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Trier
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="{{ route('listeProduits','sort-by-name') }}">Trier par nom</a>
               <a class="dropdown-item" href="{{ route('listeProduits','sort-by-cat') }}">Trier par catégorie</a>
               <a class="dropdown-item" href="{{ route('listeProduits','check') }}">Trier par prix croissant</a>
            </div>
          </div>
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
                             <br>
                             @if($product->id_PROMOTION != "" && $product->id_PROMOTION != 0)
                                 @if ($product->Promotion->VALUE != "")
                                     {{"Réduction : -" . $product->Promotion->VALUE . "€ sur le produit"}}
                                 @endif
                                 @if ($product->Promotion->PERCENT != "")
                                     {{"Réduction : -" . $product->Promotion->PERCENT . "% sur le produit"}}
                                 @endif
                             @endif
                         <a href="{{route('ficheProduit', ['id'=>$product->NAME])}}">
                           <div class="img">  
                              <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
                           </div> 
                          </a>
                         </div>

                         <div class="container-right">
                            <!-- Affiche le nom et le prix de l'article -->
                         @if($product->id_PROMOTION != ""&& $product->id_PROMOTION != 0)
                             @if ($product->Promotion->VALUE != "")
                                     <br>
                                 {{$product->PRICE/100-$product->Promotion->VALUE}}€
                             @endif
                             @if ($product->Promotion->PERCENT != "")
                                     <br>
                                 @php $reduct = $product->PRICE/100 * $product->Promotion->PERCENT/100 @endphp
                                     {{$product->PRICE/100-$reduct}}€
                             @endif
                         @else
                             {{$product->PRICE/100}}€
                         @endif

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