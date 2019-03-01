@extends('layout/public_layout')

@section('title', 'Produits')
    

@section('content')

@foreach ($articles as $art)
   <div class="cont_elements">
      <form action="panier.php" method="post" id="form1">
         <div class="element">   
            <img src="{{$art['image']}}" alt="carotte" class="imgsize">
            {{$art['nom']}}
            {{$art['prix']}}€
            <input type ="checkbox" class="check" name="check[]" id="recep" value="#"/>
         </div>
      </form>   
   </div>   
@endforeach
<button type="submit" form="form1" value="submit" class="btn btn-secondary btn-sm">Submit</button>

@endsection