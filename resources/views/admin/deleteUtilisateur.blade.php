@extends('layout/admin_layout')

@section('title', 'Gestion des produits')

@section('content')
    Suppression d'un utilisateur
@endsection

@section('content-two')
<div class="container">
    <form method="POST" action="{{route('destroyUtilisateur',['id'=>$id])}}">
        @csrf
        @method('delete')
        Êtes-vous sur de vouloir supprimer cet utilisateur ?
        <input class="btn btn-light" type="submit" value="Supprimer l'utilisateur">
        <a class="btn btn-light" href="{{route('gestionUtilisateurs')}}">Annuler la suppression</a>
    </form>
</div>
@endsection