@extends('layout/public_layout')

@section('title', 'Panier')
    

@section('content')

@foreach ($data as $product)

    <div class="container-articles">
        <div class="container-article">
            <div class="container-left">
{{--                @dd($product['product'])--}}
                {{$product['product']->NAME}}
                <img src="{{$product['product']->IMAGE}}" alt="vegetables-images" class="image">
            </div>
            <div class="container-right">
                <form method="POST" action="{{route('modifier-qte', ['id'=>$product['product']->id_PRODUCT])}}">
                    @csrf
                     Quantité : <input type="number" name="quantity" value="{{$product['quantity']}}" min="0" required/>
                     <button class="btn btn-light" type="submit" value="">modifier qte</button>
                </form>
                <form method = "POST" action = "{{route('delete-panier-item', ['id'=>$product['product']->id_PRODUCT])}}">
                    @csrf
                    <button class="btn btn-light" type="submit" value="">Supprimer l'article</button>
                </form>
            </div>
        </div>
    </div>

@endforeach

<form method="POST" action="{{route('delete-panier')}}">
    @csrf
    <button type="submit" class="btn btn-light">Supprimer le panier</button>
</form>
<form method="POST" action="{{route('commander')}}">
    @csrf
    <button type="submit" class="btn btn-light">Commander</button>
</form>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@endsection