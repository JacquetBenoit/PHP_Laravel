@extends('layout/public_layout')

@section('title', 'Produits')


@section('content')

<div class="container">
    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
    @endif  
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
<form method="POST" action="{{route('editCompte')}}">
    @csrf
    <div class="form-group">
        <label for="descrition">Pseudo</label>
        <input type="text" value="{{$user->name}}" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Mail</label>
        <input type="email" value="{{$user->email}}" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Nom</label>
        <input type="text" value="{{$user->customer->NAME}}" name="NAME" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Prenom</label>
        <input type="text" value="{{$user->customer->FIRSTNAME}}" name="FIRSTNAME" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Adresse 1</label>
        <input type="text" value="{{$customer->address->STREET1}}" name="STREET1" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Adresse 2</label>
        <input type="text" value="{{$customer->address->STREET2}}" name="STREET2" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Code postal</label>
        <input type="text" value="{{$customer->address->POSTCODE}}" name="POSTCODE" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Ville</label>
        <input type="text" value="{{$customer->address->TOWN}}" name="TOWN" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Pays</label>
        <input type="text" value="{{$customer->address->COUNTRY}}" name="COUNTRY" class="form-control">
    </div>
        <input type="hidden" value="{{$customer->address->id_ADDRESS}}" name="id_ADDRESS">
        <input type="hidden" value="{{$customer->id_CUSTOMER}}" name="id_c">
        <input type="hidden" value="{{$user->id}}" name="id_USER">
    <button type="submit" class="btn btn-light">Submit</button>
</form>
</div>














@endsection