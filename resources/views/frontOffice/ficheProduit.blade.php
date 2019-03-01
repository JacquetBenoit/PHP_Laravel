@extends('layout/public_layout')


@section('title', 'Fiche produit')
@section('content')
Fiche produit 
<div class="cont_elements">
    <div class="element"> 
        <img src="{{$article['image']}}" alt="article image" class="imgsize">
        {{$article["nom"]}}
        {{$article["prix"]}}€
    </div>
    <div class="othertext">
        {{$article["desc"]}}
    </div>
</div>
@endsection
    
