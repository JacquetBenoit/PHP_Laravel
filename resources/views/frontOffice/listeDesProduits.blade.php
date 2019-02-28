@extends('layout/public_layout')

@section('title', 'Produits')
    

@section('content')
   Liste des produits 

   <div class="container">
      <!-- CONTAINER ARTICLES -->
      <div class="container-articles">
         <h2>Catalogue</h2>
         <!-- Formulaire appelle le programme panier.php pour lui soumettre les cases cochées -->
            <form method = "POST" action = "panier.php"> 


               <!-- Affiche tous les articles contenuent dans le tableau -->
               @foreach ($produits as $key=>$produit)
            
                  <!-- DEBUT Affiche 1 article -->
                  <div class="container-article">

                     <!-- Affiche l'image de l'article -->
                     <div class="container-left">       		
                           <img src="{{asset($produit["Photo"])}}" alt = "Stan Smith">
                     </div>
                     
                     <div class="container-right">
                        <!-- Affiche le nom et le prix de l'article -->
                        <h2>{{$produit["Name"] ."\n"}}</h2>
                        <p>{{$produit["Price"]}}</p>
                        
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
            <button type="button" class="btn btn-secondary btn-lg" value="to_order">Commander</button>
            {{-- <button type="submit" value="to_order">Commander</button> --}}
            </form>
      </div>
   </div>
@endsection