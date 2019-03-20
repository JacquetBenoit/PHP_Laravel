@extends('layout/public_layout')

@section('title', 'Panier')
    

@section('content')
   Panier

   {{-- TABLEAU DES PRODUITS --}}
   <table class="table table-hover table-hover table-striped table-dark table-responsive">
      <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Nom du produit</th>
         <th scope="col">Image</th>
         <th scope="col">Prix Unitaire</th>
         <th scope="col">Quantité</th>
         <th scope="col">Supprimer</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($panierProduits as $lignePanier)
         {{--@dd($lignePanier);--}}
         <tr>
            <th scope="row">{{$lignePanier['produit']->id}}</th>
            <td>{{$lignePanier['produit']->nom}}</td>
            <td> <img  class="img-fluid" src="{{asset($lignePanier['produit']->image)}}" alt = "Stan Smith"></td>
            <td>{{$lignePanier['produit']->prix/100 ."€"}}</td>
            <td><input type="number" name="quantity[]" value="{{$lignePanier['quantite']}}" min="0" max="10" required/></td>
            <td><a href="{{asset($lignePanier['produit']->id)}}" type="button" class="btn btn-light"><i class="fas fa-trash-alt"></i></a></td>
         </tr>
      @endforeach
      </tbody>
   </table>
   <!-- Envoie du formulaire -->
   <button type="button" class="btn btn-secondary btn-lg" value="commander">Commander</button>
@endsection