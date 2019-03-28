@extends('layout/public_layout')

@section('title', 'Mes commandes')
    

@section('content')

<div class="container">
<table class="table">
      <thead>
      <tr>
          <th scope="col">Date de commande</th>
          <th scope="col">Date de livraison</th>
          <th scope="col">Produits</th>
          <th scope="col">Quantitée</th>
      </tr>
      </thead>
      <tr>
   @foreach ($command as $item)
   
   <td>{{$item->COMMAND_DATE}}</td>
   <td>{{$item->LIVRAISON_DATE}}</td>
   <td>@foreach ($item->products as $produit)
       {{$produit->NAME}}
   @endforeach
   </td>
   <td>@foreach ($item->products as $produit)
         {{$produit->pivot->QUANTITY}}
     @endforeach
     </td>
      </tr>
       
   @endforeach
@endsection
</table>
</div>