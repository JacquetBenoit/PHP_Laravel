@extends('layout/public_layout')

@section('title', 'Produits')
    

@section('content')

@foreach ($articles as $art)
   <div class="cont_elements">
      <a href="{{route('ficheProduit', ['id'=>$art['nom']])}}">
         <div class="element">  
            <img src="{{$art['image']}}" alt="carotte" class="imgsize">               
            {{$art['nom']}}
            {{$art['prix']}}€
          </div>
      </a>
   </div>   
@endforeach
<button type="submit" form="form1" value="submit" class="btn btn-secondary btn-sm">Submit</button>

@endsection