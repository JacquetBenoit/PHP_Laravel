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
            @if($product->id_PROMOTION != "" && $product->id_PROMOTION != 0)
                @if ($product->Promotion->VALUE != "")
                    {{"Réduction : -" . $product->Promotion->VALUE . "€ sur le produit"}}
                @endif
                @if ($product->Promotion->PERCENT != "")
                    {{"Réduction : -" . $product->Promotion->PERCENT . "% sur le produit"}}
                @endif
                <br>
            @endif
            {{$product->DESCRIPTION}}
        </div>
        
        <div class="container-right">
           <!-- Affiche le nom et le prix de l'article -->
            <h2>{{$product->NAME}}</h2>
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
                <p>{{$product->PRICE/100}}€</p>
        @endif
           
           <!-- Quantité -->
           <input type="number" name="quantity" value="1" min="0" max="{{$product->STOCK}}" required/>
           <button class="btn btn-light" type="submit" value="">Ajouter au panier</button>
        </div>
    </div>
</div>
</form>

@endsection