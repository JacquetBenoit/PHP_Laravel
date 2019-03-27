@extends('layout/admin_layout')

@section('title', 'Gestion des produits')

@section('content')
    Ajout de produit
@endsection

@section('content-two')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
<form method="POST" action="/store">
  @csrf
  <div class="form-group">
    <label for="descrition">Description</label>
  <input value="{{$produit->DESCRIPTION}}" name="DESCRIPTION" type="text" class="form-control" id="desc" placeholder="Enter Descrition">
  </div>
  <div class="form-group">
    <label for="id_categorie">Id Categorie</label>
    <input value="{{$produit->id_CATEGORY}}" name="id_CATEGORY" type="number" class="form-control" id="id_cat" placeholder="Enter Id Categorie">
  </div>
  <div class="form-group">
    <label for="id_promotion">Id Promotion</label>
    <input value="{{$produit->id_PROMOTION}}" name="id_PROMOTION" type="number" class="form-control" id="id_promo" placeholder="Enter Id Promotion">
  </div>
  <div class="form-group">
    <label for="image">IMAGE</label>
    <input value="{{$produit->IMAGE}}" name="IMAGE" type="url" class="form-control" id="image" placeholder="Enter IMAGE URL">
  </div>
  <div class="form-group">
    <label for="name">NAME</label>
    <input value="{{$produit->NAME}}" name="NAME" type="text" class="form-control" id="name" placeholder="Enter NAME">
  </div>
  <div class="form-group">
    <label for="price">PRICE</label>
    <input value="{{$produit->PRICE}}" name="PRICE" type="number" class="form-control" id="price" placeholder="Enter PRICE">
  </div>
  <div class="form-group">
    <label for="stock">STOCK</label>
    <input value="{{$produit->STOCK}}" name="STOCK" type="number" class="form-control" id="stock" placeholder="Enter STOCK">
  </div>
  <div class="form-group">
    <label for="weight">WEIGHT</label>
    <input value="{{$produit->WEIGHT}}" name="WEIGHT" type="number" class="form-control" id="weight" placeholder="Enter WEIGHT">
  </div>
  <div class="form-group">
    <label for="is_actif">
    @if($produit->is_ACTIVE == "1")Rendre non actif
      <input value="0" name="is_ACTIVE" type="checkbox" class="form-control" id="is_actif" placeholder="is_actif">
    @else Rendre actif
      <input value="1" name="is_ACTIVE" type="checkbox" class="form-control" id="is_actif" placeholder="is_actif">
    @endif</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="hidden" name="id" value="{{$produit->id_PRODUCT}}">
</form>
</div>

@endsection