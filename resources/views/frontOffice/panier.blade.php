@extends('layout/public_layout')

@section('title', 'Panier')
    

@section('content')

@foreach ($data as $product)
<div class="container-articles">
    <div class="container-article">
        <div class="container-left"> 
            {{$product['product']->NAME}}
            <img src="{{$product['product']->IMAGE}}" alt="vegetables-images" class="image">
        </div>
        <div class="container-right">
            Quantité : {{$product['quantity']}}
        </div>
    </div>
</div>
@endforeach


@endsection