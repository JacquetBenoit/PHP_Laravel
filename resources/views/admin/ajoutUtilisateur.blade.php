@extends('layout/admin_layout')

@section('title', 'Gestion des produits')

@section('content')
    Ajout d'un utilisateur
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
<div class="container">
<form method="POST" action="/store-utilisateur">
  @csrf
  <div class="form-group">
    <label for="descrition">First name</label>
    <input value="{{$customer->FIRSTNAME}}" name="FIRSTNAME" type="text" class="form-control" id="firstname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="id_categorie">Name</label>
    <input value="{{$customer->NAME}}" name="NAME" type="text" class="form-control" id="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="id_promotion">Email</label>
    <input value="{{$customer->User->email}}" name="email" type="email" class="form-control" id="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="image">Adouber Admin ?<br>
        <label for="oui">Oui
    <input value="1" name="is_admin" type="radio" class="form-control" id="oui"></label>
        <label for="non">Non
    <input value="0" name="is_admin" type="radio" class="form-control" id="non"></label>
      </label>
  </div>
  <button type="submit" class="btn btn-light">Submit</button>
  <input type="hidden" name="id" value="{{$customer->User->id}}">
</form>
</div>

@endsection