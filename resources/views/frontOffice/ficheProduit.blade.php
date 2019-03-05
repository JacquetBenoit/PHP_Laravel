@extends('layout/public_layout')
{{-- @dump($produit) --}}

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
            <p>{{$produit -> prix . " €"}}</p>
           
           <!-- Quantité -->
           <input type="number" name="quantity[{{$produit->nom}}]" value="1" min="0" max="10" required/>

           <!-- Case à cocher -->
           <label for="case">Ajouter au panier</label>
           <input type="checkbox" name="add_to_basket[]" value="">
        </div>
    </div>
</div>

@endsection
    
