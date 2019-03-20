@extends('layout/public_layout')

@section('title', 'Fiche produit')

@section('content')
{{-- Fiche produit {{ $id }} --}}
<div class="container-articles">
    <div class="container-article container-fiche-produit">

        <!-- Affiche l'image de l'article -->
        <div class="container-left">       		
           <img src="{{asset($produit -> image)}}" alt = "Stan Smith">
        </div>
        
        <div class="container-right">
           <!-- Affiche le nom et le prix de l'article -->
            <h2>{{$produit -> nom ."\n"}}</h2>
            <p>{{$produit -> prix /100}} €</p>

            <!-- Formulaire appelle le programme panier.php pour lui soumettre le produit -->
            <form method = "POST" action = "{{route('ajouterPanier')}}">
            @csrf
               <!-- Quantité -->
               <input type="number" name="quantity[{{$produit->nom}}]" value="1" min="0" max="10" required/>

                <!-- Affiche la description de l'article -->
                <p>{{$produit->description}}</p>

                <!-- Envoie du formulaire -->
                <button type="submit" class="btn btn-secondary btn-lg" value="add_to_basket"><i class="fas fa-shopping-cart"></i></button>
            </form>
        </div>
    </div>
</div>

@endsection
    
