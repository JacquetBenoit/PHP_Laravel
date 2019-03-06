@extends('layout/admin_layout')

@section('title', 'Gestion des produits')

@section('content')
    Suppression de produit
@endsection

@section('content-two')
<div class="container">
    <form method="POST" action="{{route('destroyProduit',['id'=>$id])}}">
        @csrf
        @method('delete')
        Êtes-vous sur de vouloir supprimer le produit ?
        <input class="btn btn-light" type="submit" value="Supprimer le produit">
        <a class="btn btn-light" href="{{route('gestionProduits')}}">Annuler la suppression</a>
    </form>
</div>
@endsection