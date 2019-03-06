@extends('layout/admin_layout')

@section('title', 'Gestion des Produits')

@section('content')
    {{-- TABLEAU DES PRODUITS --}}
@section('titleSection', 'Produits')

    <a href="{{route('gestionProduitsAjouter')}}" type="button" class="btn btn-secondary">Ajouter un produit</a>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du produit</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Poids</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Stock</th>
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
                    <td>{{$produit -> prix /100}} €</td>
                    <td>{{$produit->stock}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection