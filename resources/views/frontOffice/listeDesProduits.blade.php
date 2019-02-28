@extends('layout/public_layout')

@section('title', 'Produits')
    

@section('content')

@foreach ($articles as $art)
   <div class="flex-center">   
      <img src="{{$art['image']}}" alt="carotte" class="imgsize">
      {{$art['nom']}}
      {{$art['prix']}} €
   </div>
@endforeach

@endsection