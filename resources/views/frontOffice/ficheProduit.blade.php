@extends('layout/public_layout')
{{-- @dump($article) --}}

@section('title', 'Fiche produit')

@section('content')
{{-- Fiche produit {{ $id }} --}}
<div class="container-articles">
    <div class="container-article">

        <!-- Affiche l'image de l'article -->
        <div class="container-left">       		
            <img src="{{$products->IMAGE}}" alt="vegetables-images" class="image">
            {{$products->DESCRIPTION}}
        </div>
        
        <div class="container-right">
           <!-- Affiche le nom et le prix de l'article -->
            <h2>{{$products->NAME}}</h2>
            <p>{{$products->PRICE}}cents</p>
           
           <!-- Quantité -->
           <input type="number" name="" value="1" min="0" max="10" required/>

           <!-- Case à cocher -->
           <label for="case">Ajouter au panier</label>
           <input type="checkbox" name="add_to_basket[]" value="">
        </div>
    </div>
</div>

@endsection
    
