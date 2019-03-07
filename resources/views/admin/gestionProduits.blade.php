@extends('layout/admin_layout')

@section('title', 'Gestion des Produits')

@section('content')
    {{-- TABLEAU DES PRODUITS --}}
@section('titleSection', 'Produits')

    <a href="{{route('gestionProduitsAjouter')}}" type="button" class="btn btn-light">Ajouter un produit</a>

    {{-- TABLEAU DES PRODUITS --}}
    <table class="table table-hover table-hover table-striped table-dark table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom du produit</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Poids</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($produits as $produit)
            <tr>
                <th scope="row">{{$produit->id}}</th>
                <td>{{$produit->nom}}</td>
                <td> <img  class="img-fluid" src="{{asset($produit->image)}}" alt = "Stan Smith"></td>
                <td>{{$produit->description}}</td>
                <td>{{$produit->poids}}</td>
                <td>{{$produit -> prix /100 ."€"}}</td>
                <td>{{$produit->stock}}</td>
                <td><a href="{{route('gestionProduitsModifier', $produit->id)}}" type="button" class="btn btn-light">Modifier</a></td>
                <td><a href="{{route('gestionProduitsDelete', $produit->id)}}" type="button" class="btn btn-light">Supprimer</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection