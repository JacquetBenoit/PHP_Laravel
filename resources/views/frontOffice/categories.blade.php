@extends('layout/public_layout')

@section('title', 'Accueil')

@section('nomDuSite', 'Sneakers Store')

@section('content')
    @if(Auth::check())
    <h3>Dernier produit visité</h3>
    <div class="container-left">
        {{$product->NAME}}
        {{$product->category->NAME}}
        <br>
        @if($product->id_PROMOTION != "" && $product->id_PROMOTION != 0)
            @if ($product->Promotion->VALUE != "")
                {{"Réduction : -" . $product->Promotion->VALUE . "€ sur le produit"}}
            @endif
            @if ($product->Promotion->PERCENT != "")
                {{"Réduction : -" . $product->Promotion->PERCENT . "% sur le produit"}}
            @endif
        @endif
        <a href="{{route('ficheProduit', ['id'=>$product->id_PRODUCT])}}">
            <div class="img">
                <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
            </div>
        </a>
    </div>

    <div class="container-right">
        <!-- Affiche le nom et le prix de l'article -->
        @if($product->id_PROMOTION != ""&& $product->id_PROMOTION != 0)
            @if ($product->Promotion->VALUE != "")
                <br>
                {{$product->PRICE/100-$product->Promotion->VALUE}}€
            @endif
            @if ($product->Promotion->PERCENT != "")
                <br>
                @php $reduct = $product->PRICE/100 * $product->Promotion->PERCENT/100 @endphp
                {{$product->PRICE/100-$reduct}}€
            @endif
        @else
            {{$product->PRICE/100}}€
    @endif
    </div>
    </div>
    @else
        {{--@foreach($categories as $categorie)--}}

            @foreach ($products as $product)
                @if($product->is_ACTIVE == 1)
                    <!-- DEBUT Affiche 1 article -->
                        <div class="container-article">

                            <!-- Affiche l'image de l'article -->
                            <div class="container-left">
                                {{$product->NAME}}
                                {{$product->category->NAME}}
                                <br>
                                @if($product->id_PROMOTION != "" && $product->id_PROMOTION != 0)
                                    @if ($product->Promotion->VALUE != "")
                                        {{"Réduction : -" . $product->Promotion->VALUE . "€ sur le produit"}}
                                    @endif
                                    @if ($product->Promotion->PERCENT != "")
                                        {{"Réduction : -" . $product->Promotion->PERCENT . "% sur le produit"}}
                                    @endif
                                @endif
                                <a href="{{route('ficheProduit', ['id'=>$product->id_PRODUCT])}}">
                                    <div class="img">
                                        <img src="{{$product->IMAGE}}" alt="vegetables-images" class="image">
                                    </div>
                                </a>
                            </div>

                            <div class="container-right">
                                <!-- Affiche le nom et le prix de l'article -->
                                @if($product->id_PROMOTION != ""&& $product->id_PROMOTION != 0)
                                    @if ($product->Promotion->VALUE != "")
                                        <br>
                                        {{$product->PRICE/100-$product->Promotion->VALUE}}€
                                    @endif
                                    @if ($product->Promotion->PERCENT != "")
                                        <br>
                                        @php $reduct = $product->PRICE/100 * $product->Promotion->PERCENT/100 @endphp
                                        {{$product->PRICE/100-$reduct}}€
                                    @endif
                                @else
                                    {{$product->PRICE/100}}€
                                @endif
                            </div>
                @endif
            @endforeach
        {{--@endforeach--}}
    @endif
@endsection
