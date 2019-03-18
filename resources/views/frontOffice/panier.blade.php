@extends('layout/public_layout')

@section('title', 'Panier')
    

@section('content')

@foreach ($data as $product)
<form method = "POST" action = "{{route('delete-panier-item', ['id'=>$product['product']->id_PRODUCT])}}">
    @csrf
    <div class="container-articles">
        <div class="container-article">
            <div class="container-left"> 
                {{$product['product']->NAME}}
                <img src="{{$product['product']->IMAGE}}" alt="vegetables-images" class="image">
            </div>
            <div class="container-right">
             Quantité : {{$product['quantity']}}
             <button type="submit" value="">Supprimer l'article</button>
            </div>
        </div>
    </div>
@endforeach
</form>
<form method="POST" action="{{route('delete-panier')}}">
    @csrf
    <button type="submit" class="btn btn-light">Supprimer le panier</button>
</form>




@endsection