@extends('layout/public_layout')
{{-- @dump($article) --}}

@section('title', 'Fiche produit')

@section('content')
{{-- Fiche produit {{ $id }} --}}
<form method = "POST" action ="{{route('store-panier',['id'=>$product->id_PRODUCT])}}">
    @csrf
<div class="container-articles">
    <div class="container-article">

        <!-- Affiche l'image de l'article -->
        <div class="container-left">
            <div class="img">        		
            <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
            </div>
            {{$product->DESCRIPTION}}
        </div>
        
        <div class="container-right">
           <!-- Affiche le nom et le prix de l'article -->
            <h2>{{$product->NAME}}</h2>
            <p>{{$product->PRICE/100}}€</p>
           
           <!-- Quantité -->
           <input type="number" name="quantity" value="1" min="0" max="{{$product->STOCK}}" required/>
           <button class="btn btn-light" type="submit" value="">Ajouter au panier</button>
        </div>
    </div>
</div>
</form>

@endsection