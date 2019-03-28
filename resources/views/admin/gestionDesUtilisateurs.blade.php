@extends('layout/admin_layout')

@section('title', 'Gestion des utilisateurs')

@section('content')
    Gestion des utilisateurs
@endsection

@section('content-two')
    @if(isset($commands))
        <h2>{{"Client : " . $commands['0']->customer->NAME}}</h2>
        @foreach($commands as $command)
            @php $total = 0; @endphp
            <h4>{{'Commande num : ' . $command->id_ORDER}}</h4>
            <br>
            @foreach($command->products as $produit)
                @php $prixProduit = $produit['PRICE']; @endphp
                {{"Articles commandés : " . $produit['NAME'] . "->"}}
                {{"Quantité : " . $produit->pivot->QUANTITY}}<br>
                @if($produit->id_PROMOTION != '0' && $produit->id_PROMOTION != '')
                    {{"promo sur le produit : " . $produit->id_PROMOTION}}

                    @php
                    $prixProduit -= $produit->Promotion->VALUE;
                    $prixProduit -= $produit['PRICE']*$produit->Promotion->PERCENT/100;
                    @endphp
                @endif

                 @php   $total += $prixProduit; @endphp
                <br>
            @endforeach
            {{'Total de la commande : ' . $total . " €"}}
            <br><br>
        @endforeach

    @endif





<div class="d-flex justify-content-center">
  <a class="btn btn-light" href="{{route('ajoutUtilisateur')}}">AJOUTER UN UTILISATEUR</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">ACTIONS</th>
          <th scope="col">Rôle</th>
      </tr>
    </thead>
    <tbody>
@foreach ($customers as $customer)   
        <tr>
          <td>{{$customer->id_CUSTOMER}}</td>
          <td>{{$customer->FIRSTNAME}}</td>
          <td>{{$customer->Name}}</td>
          <td>{{$customer->User->email}}</td>
          <td><a href="{{route('deleteUtilisateur',['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="delete">DELETE</a>
          <a href="{{route('updateUtilisateur', ['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="update">UPDATE</a></td>
            <td>@if($customer->User->is_admin == 1){{'Admin'}}
                @else{{'Client'}}@endif</td>
          <td><a href="{{route('listCommand', ['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="command">Listes des commandes</a></td></td>
        </tr>       
@endforeach
    </tbody>
</table>
@endsection