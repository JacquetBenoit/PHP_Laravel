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
        <tr>

            {{--Affichage du détail d'une commande--}}

            @foreach($commands as $command)
                @if(array_key_exists('id', $_POST))
                    @if($command["id_ORDER"] == $id)
                        <h2>{{"Client : " . $command->customer->NAME}}</h2>
                        <h2>{{"Commande num : " . $command["id_ORDER"]}}</h2>

                        {{--Produits d'une commande--}}

                        @foreach($command->product as $produit)
                            {{"Articles commandés : " . $produit['NAME']}}
                                    {{"Quantité : " . $produit->pivot->QUANTITY}}
                                    <br>
                        @endforeach
                        <br>

                        {{--Date de commande et de livraison--}}

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
                {{--Calcul du prix de la commande--}}

                @php $prixTotal = 0; @endphp
                @foreach($command->product as $produit)
                            @php $prixProduit = $produit['PRICE'];
                            $date = date('Y-m-d');
                            @endphp

                                {{--Vérification de la date et de la présence d'une promo--}}

                            @if($produit->id_PROMOTION != "0" && $produit->Promotion->START_DATE < $date && $date < $produit->Promotion->END_DATE)

                                {{--Calcul de la réduction de la pomo--}}

                                @php
                                    $prixProduit -= $produit->Promotion->VALUE;
                                    $prixProduit -= $produit['PRICE']*$produit->Promotion->PERCENT/100;
                                @endphp
                            @endif

                            {{--Prix total--}}

                            @php
                                $prixTotal += $produit->pivot->QUANTITY * $prixProduit;
                            @endphp
                    <br>
                @endforeach
                {{"Prix total : " . $prixTotal}}
            </td>

            <td>

                {{--Voir les détails de la commande--}}

                <form action="{{route('gestionProduit')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$command["id_ORDER"]}}" name="id">
                    <input type="submit" value="Voir commande">
                </form>
            </td>
            <td>

                {{--Supprimer une commande--}}

                <form action="{{route('deleteCommandes')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$command["id_ORDER"]}}" name="idDelete">
                    <input type="submit" value="Supprimer commande">
                </form>
            </td>
            <td>

                {{--Détails sur les dates de commande et de livraison--}}

                @if($command->LIVRAISON_DATE == null)
                    <p>Date de commande : {{$command['COMMAND_DATE']}}</p>
                    <form action="{{route('confirmCommandes')}}" method="POST">
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

