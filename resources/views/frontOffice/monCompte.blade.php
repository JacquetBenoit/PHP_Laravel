@extends('layout/public_layout')

@section('title', 'Produits')


@section('content')

<div class="container">
<form method="POST" action="{{route('editCompte')}}">
    @csrf
    <div class="form-group">
        <label for="descrition">Pseudo</label>
        <input type="text" value="{{$user->name}}" name="userName" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Mail</label>
        <input type="email" value="{{$user->email}}" name="userMail" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Nom</label>
        <input type="text" value="{{$user->customer->NAME}}" name="userCustName" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Prenom</label>
        <input type="text" value="{{$user->customer->FIRSTNAME}}" name="userFirstname" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Adresse 1</label>
        <input type="text" value="{{$customer->address->STREET1}}" name="street1" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Adresse 2</label>
        <input type="text" value="{{$customer->address->STREET2}}" name="street2" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Code postal</label>
        <input type="text" value="{{$customer->address->POSTCODE}}" name="postcode" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Ville</label>
        <input type="text" value="{{$customer->address->TOWN}}" name="town" class="form-control">
    </div>
    <div class="form-group">
        <label for="descrition">Pays</label>
        <input type="text" value="{{$customer->address->COUNTRY}}" name="country" class="form-control">
    </div>
    <button type="submit" class="btn btn-light">Submit</button>
</form>
</div>













@endsection