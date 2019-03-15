@extends('layout/admin_layout')

@section('title', 'Gestion des commandes')

@section('content')
    Gestion des commandes

@endsection

@section('content-two')
<table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Client</th>
            <th scope="col">Prix Total</th>
            <th scope="col">Lien</th>
            <th scope="col">Suprimer</th>
            <th scope="col">Livraison</th>
          </tr>
        </thead>
    @dump($_POST)
            <tr>
              @foreach($commands as $command)
                  @if(array_key_exists('id', $_POST))
                      @if($command["id_ORDER"] == $id)
                <h2>{{"Client : " . $command->customer->NAME}}</h2>
                          <h2>{{"Commande num : " . $command["id_ORDER"]}}</h2>

                          @foreach($command->product as $produit)
                              {{"Articles commandés : " . $produit['NAME']}}
                              @foreach($commands_ligne as $commandLigne)
                                  @if($commandLigne['id_PRODUCT'] == $produit->id_PRODUCT && $commandLigne['id_ORDER'] == $command->id_ORDER)
                                      {{"Quantité : " . $commandLigne['QUANTITY']}}
                                      <br>
                                  @endif
                              @endforeach
                            @endforeach
                            <br>
                            {{"Date de la commande : " . $command["COMMAND_DATE"]}}
                            <br>
                            {{"Date de livraison : " . $command["LIVRAISON_DATE"]}}
                            <br><br>
                      @endif
                  @endif
            </tr>
          <tr>
                  <th scope="row">{{$command["id_ORDER"]}}</th>
                  <td>{{$command->customer->NAME}}</td>
                  <td>
                      @php $prixTotal = 0; @endphp
                      @foreach($command->product as $produit)
                        {{--{{"Prix de l'article : " . $produit['PRICE']}}--}}
                          @foreach($commands_ligne as $commandLigne)
                              @if($commandLigne['id_PRODUCT'] == $produit->id_PRODUCT && $commandLigne['id_ORDER'] == $command->id_ORDER)
                                  {{--{{"Quantité : " . $commandLigne['QUANTITY']}}--}}
                                  @php
                                       $prixTotal += $commandLigne['QUANTITY'] * $produit['PRICE'];
                                  @endphp
                              @endif
                          @endforeach
                          <br>
                      @endforeach
                      {{"Prix total : " . $prixTotal}}
                  </td>

                  <td>
                      <form action="{{route('gestionProduit')}}" method="POST" >
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$command["id_ORDER"]}}" name="id">
                          <input type="submit" value="Voir commande">
                      </form>
                  </td>
                  <td>
                      <form action="{{route('deleteCommandes')}}" method="POST" >
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$command["id_ORDER"]}}" name="idDelete">
                          <input type="submit" value="Supprimer commande">
                      </form>
                  </td>
              <td>
                  @if($command->LIVRAISON_DATE == null)
                    <p>Date de commande : {{$command['COMMAND_DATE']}}</p>
                  <form action="{{route('confirmCommandes')}}" method="POST" >
                      {{ csrf_field() }}
                      <input type="hidden" value="{{$command["id_ORDER"]}}" name="id">
                      <input type="submit" value="Commande livrée">
                  </form>
                  @else
                      <p>Date livraison : {{$command['LIVRAISON_DATE']}}</p>
                  @endif
              </td>
          </tr>

              @endforeach

      </table>
@endsection

