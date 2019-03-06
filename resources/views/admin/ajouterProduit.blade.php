@extends('layout/admin_layout')

@section('title', 'Gestion des Produits')

@section('content')
    {{-- TABLEAU DES PRODUITS --}}
@section('titleSection', 'Ajouter un produit')


<form>
    <div class="form-group">
        <label for="nom">{{$produit->nom}}</label>
        <input type="text" class="form-control" id="nom" placeholder="Nom du produit">
    </div>
    <div class="form-group">
        <label for="description">{{$produit->description}}</label>
        <textarea class="form-control" id="description" rows="3" placeholder="Description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

@endsection