@extends('layout/admin_layout')

@section('title', 'Gestion des commandes')

@section('content')
    Gestion des commandes

@endsection

@section('content-two')
{{--    @dump($commands)--}}
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
          <tr>
                  <th scope="row">{{$command["id_ORDER"]}}</th>
                  <td>{{$command->customer->NAME}}</td>
                  <td>
                          @foreach($commands_ligne as $commandLigne)
                              @if($commandLigne['id_ORDER'] == $command->id_ORDER)
                                  {{"Quantité : " . $commandLigne['QUANTITY']}}
                                  {{"ID du produit : " . $commandLigne['id_PRODUCT']}}
                                  @foreach($Produits as $produit)
                                      @php $prixTotal @endphp
                                      @if($produit['id_PRODUCT'] == $commandLigne['id_PRODUCT'])
                                      {{"Prix de l'article : " . $produit['PRICE']}}
                                      {{"Prix de l'article : " . $produit['PRICE'] * $commandLigne['QUANTITY']}}
                                      @php $prixTotal += $produit['PRICE'] * $commandLigne['QUANTITY'] @endphp
                                      @endif
                                  @endforeach
                                  <br>
                              @endif
                          @endforeach
                  </td>

                  <td>
                      <form>
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$command["id_ORDER"]}}">
                          <input type="submit" value="Voir commande">
                      </form>

                  </td>




          </tr>

              @endforeach
            {{--<th scope="row">1</th>--}}
            {{--<td>Chloé</td>--}}
            {{--<td>100€</td>--}}
            {{--<td>Lien</td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<th scope="row">2</th>--}}
            {{--<td>150€</td>--}}
            {{--<td>100€</td>--}}
            {{--<td>85€</td>--}}
          {{--</tr>--}}
          {{--<tr>--}}
            {{--<th scope="row">3</th>--}}
            {{--<td colspan="2">exemple3</td>--}}
            {{--<td>@salut</td>--}}

        </body>
      </table>
@endsection

