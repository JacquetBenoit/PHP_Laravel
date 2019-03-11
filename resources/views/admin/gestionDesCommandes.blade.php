@extends('layout/admin_layout')

@section('title', 'Gestion des commandes')

@section('content')
    Gestion des commandes

@endsection

@section('content-two')
{{--    {{$id}}--}}

<table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Client</th>
            <th scope="col">Prix Total</th>
            <th scope="col">Lien</th>
          </tr>
        </thead>
        <body>

              @foreach($commands as $command)
                  @if($command["id_ORDER"] == $id)
                      {{"Client : " . $command->customer->NAME}}
                      <h2>{{"Commande num : " . $command["id_ORDER"]}}</h2>
                      @foreach($command->product as $produit)
                          {{"Articles commandés : " . $produit['NAME']}}
                          @foreach($commands_ligne as $commandLigne)
                              @if($commandLigne['id_PRODUCT'] == $produit->id_PRODUCT && $commandLigne['id_ORDER'] == $command->id_ORDER)
                                  {{"Quantité : " . $commandLigne['QUANTITY']}}
                              @endif
                          @endforeach
                          <br>
                        @endforeach

                  @endif

          <tr>
                  <th scope="row">{{$command["id_ORDER"]}}</th>
                  <td>{{$command->customer->NAME}}</td>
                  <td>
                      @php $prixTotal = 0; @endphp
                      @foreach($command->product as $produit)
                        {{"Prix de l'article : " . $produit['PRICE']}}
                          @foreach($commands_ligne as $commandLigne)
                              @if($commandLigne['id_PRODUCT'] == $produit->id_PRODUCT && $commandLigne['id_ORDER'] == $command->id_ORDER)
                                  {{"Quantité : " . $commandLigne['QUANTITY']}}
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




          </tr>

              @endforeach
        </body>
      </table>
@endsection

