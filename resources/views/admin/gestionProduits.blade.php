@extends('layout/admin_layout')

@section('title', 'Gestion des produits')

@section('content')
    Gestion des produits
@endsection

@section('content-two')
<div class="d-flex justify-content-center">
  <a class="btn btn-light" href="{{route('ajoutProduit')}}">AJOUTER UN PRODUIT</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">IMAGE</th>
        <th scope="col">NAME</th>
        <th scope="col">PRICE</th>
        <th scope="col">STOCK</th>
        <th scope="col">ACTIONS</th>
        <th scope="col">is_ACTIVE</th>
      </tr>
    </thead>
    <tbody>
@foreach ($products as $product)   
        <tr>
          <td><img src="{{$product->IMAGE}}" alt="vegetables-images" class="image_back"></td>
          <td>{{$product->NAME}}</td>
          <td>{{$product->PRICE}}cents</td>
          <td>{{$product->STOCK}}</td>
          <td><a href="{{route('deleteProduit',['id'=>$product->id_PRODUCT])}}" class="btn btn-light" name="delete">DELETE</a>
          <a href="{{route('updateProduit', ['id'=>$product->id_PRODUCT])}}" class="btn btn-light" name="update">UPDATE</a></td>
          <td>@if($product->is_ACTIVE == 1)
                  {{'Produit actif'}}
              @else {{'Produit non actif'}}
              @endif
              </td>
        </tr>       
@endforeach
    </tbody>
</table>
@endsection