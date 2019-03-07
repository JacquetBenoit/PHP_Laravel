@extends('layout/admin_layout')

@section('title', 'Gestion des Produits')

@section('content')
    {{-- TABLEAU DES PRODUITS --}}
@section('titleSection', 'Modifier un produit')


<form method="post" action="/gestions-produits/">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="id" value="{{$produit->id}}" name="id">
        <label for="nom">Nom du produit</label>
        <input type="text" class="form-control" id="nom" value="{{$produit->nom}}" name="nom" placeholder="Nom du produit">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description" placeholder="Description">{{$produit->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" id="prix" value="{{$produit->prix}}" name="prix" placeholder="Prix">
    </div>
    <div class="form-group">
        <label for="poids">Poids</label>
        <input type="text" class="form-control" id="poids" value="{{$produit->poids}}" name="poids" placeholder="Poids">
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" id="stock" value="{{$produit->stock}}" name="stock" placeholder="Stock">
    </div>
    <div class="form-group">
        <label for="categorie">Categorie</label>
        <select class="form-control" id="categorie" value="{{$produit->categorie}}" name="id_categorie">
            <option value="" disabled>Choisir une catégorie</option>
            <option value="1">1 Snowboard</option>
            <option value="2">2 Lifestyle</option>
            <option value="3">3 Running</option>
            <option value="4">4 Basketball</option>
        </select>
    </div>
    <div class="form-group">
        <label for="stock">Photo du produit</label>
        <input type="text" class="form-control" id="photo" value="{{$produit->image}}" name="image" placeholder="/images/nomDuFichier.jpg">
    </div>

    <button type="submit" class="btn btn-secondary">Enregistrer</button>
</form>

@endsection