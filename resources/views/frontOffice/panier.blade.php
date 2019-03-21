@extends('layout/public_layout')

@section('title', 'Panier')
    

@section('content')
@php
$total = 0;
@endphp
@foreach ($data as $product)

    <div class="container-articles">
        <div class="container-article">
            <div class="container-left">
                {{$product['product']->NAME}}
                <img src="{{$product['product']->IMAGE}}" alt="vegetables-images" class="image">
            </div>
            <div class="container-right">
                Prix :{{$totalproduit = $product['product']->PRICE * $product['quantity'] / 100}} €
                <div class="row">
                    <form method="POST" action="{{route('modifier-qte', ['id'=>$product['product']->id_PRODUCT])}}">
                        @csrf
                        @php
                         $total += $totalproduit;    
                        @endphp
                        Quantité : <input type="number" name="quantity" value="{{$product['quantity']}}" min="0" max="{{$product['product']->STOCK}}" required/>
                        <button class="btn btn-light" type="submit" value="">modifier qte</button>
                    </form>
                    <form method = "POST" action = "{{route('delete-panier-item', ['id'=>$product['product']->id_PRODUCT])}}">
                        @csrf
                        <button class="btn btn-light" type="submit" value="">Supprimer l'article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endforeach
<div class="d-flex justify-content-center">
    Total : {{$total}} €
</div>
<div class="d-flex justify-content-center">
    <form method="POST" action="{{route('delete-panier')}}">
        @csrf
        <button type="submit" class="btn btn-light">Supprimer le panier</button>
    </form>
    <form method="POST" action="{{route('commander')}}">
        @csrf
        <button type="submit" class="btn btn-light">Commander</button>
    </form>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection