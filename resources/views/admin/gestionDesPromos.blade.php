@extends('layout/admin_layout')

@section('title', 'Gestion des promotions')

@section('content')
    Gestion des promotions
@endsection

@section('content-two')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--Créer une nouvelle promotion--}}

    <form action="{{route('ajoutPromo')}}" method="POST">
        @csrf
        Début : <input type="date" name="START_DATE">
        Fin :<input type="date" name="END_DATE">
        Réduction flat<input type="number" name="VALUE" value="0">
        Réduction %<input type="number" name="PERCENT" value="0">
        <input type="submit" value="Créer une promo" class="btn btn-light">

    </form>




<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col">Réduction en %</th>
            <th scope="col">Réduction flat</th>
            <th scope="col">Voir promo</th>
            <th scope="col">Suprimer promo</th>

          </tr>
        </thead>
        <tbody>

        {{--Affichage des détails d'une promotion--}}

            @foreach($promos as $promo)
                <tr>
                    @if(array_key_exists('id', $_POST))
                        @if($promo["id_PROMOTION"] == $id)
                            <h2>{{"Promo : " . $promo->id_PROMOTION}}</h2>

                        {{--Assigner un produit--}}

                            Assigner la promotion au produit :
                            <form action="{{route('gestionPromoassign')}}" method="POST" >
                                {{ csrf_field() }}

                                <select name="idProduit">
                                    @foreach($products as $product)
                                        <option value="{{$product->id_PRODUCT}}">{{$product->NAME}}</option>
                                    @endforeach
                                </select>

                                <input type="hidden" value="{{$promo["id_PROMOTION"]}}" name="id">
                                <input type="submit" value="Valider">
                            </form>
                        <br>

                        {{--Liste des produits de la promotion--}}

                            Liste des produits de cette promo :
                        <br>
                            @foreach($promo->products as $product)
                                {{$product->NAME}}
                                <form action="{{route('supprimerProduitDeLaPromo')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$promo->id_PROMOTION}}" name="id">
                                    <input type="hidden" value="{{$product->id_PRODUCT}}" name="idProduct">
                                    <input type="submit" value="Suprimer de cette promo">
                                </form>
                                <br>
                            @endforeach
                            <br>
                        @endif
                    @endif
                </tr>
              <tr>

                  {{--Liste des promotions--}}

                <th scope="row">{{$promo["id_PROMOTION"]}}</th>
                <td>{{$promo["START_DATE"]}}</td>
                <td>{{$promo["END_DATE"]}}</td>
                <td>{{$promo["PERCENT"]}}</td>
                <td>{{$promo["VALUE"]}}</td>
                <td>

                    {{--Afficher le détail d'une promotion--}}

                    <form action="{{route('gestionPromodetail')}}" method="POST" >
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$promo["id_PROMOTION"]}}" name="id">
                        <input type="submit" value="Voir promo" class="btn btn-light">
                    </form>
                </td>
                  <td>

                      {{--Supprimer une promotion--}}

                      <form action="{{route('deletePromo')}}" method="POST" >
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$promo["id_PROMOTION"]}}" name="idDelete">
                          <input type="submit" value="Supprimer promotion" class="btn btn-light">
                      </form>
                  </td>
              </tr>
                @endforeach
        </tbody>
      </table>
@endsection