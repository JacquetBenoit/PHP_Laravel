@extends('layout/public_layout')

@section('title', 'Produits')


@section('content')
    @dump ($user)

<form method="POST" action="{{route('editCompte')}}">
    @csrf
    <input type="text" value="{{$user->name}}" name="userName">
    <input type="email" value="{{$user->email}}" name="userMail">
    <input type="text" value="{{$user->customer->NAME}}" name="userCustName">
    <input type="text" value="{{$user->customer->FIRSTNAME}}" name="userFirstname">
    <input type="text" value="{{$customer->address->STREET1}}" name="street1">
    <input type="text" value="{{$customer->address->STREET2}}" name="street2">
    <input type="number" value="{{$customer->address->POSTCODE}}" name="postcode">
    <input type="text" value="{{$customer->address->TOWN}}" name="town">
    <input type="text" value="{{$customer->address->COUNTRY}}" name="country">
    <button type="submit" class="btn btn-light">Submit</button>
</form>













@endsection