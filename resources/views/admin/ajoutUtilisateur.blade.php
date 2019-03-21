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
    <input value="{{$customer->EMAIL}}" name="EMAIL" type="email" class="form-control" id="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="image">Password</label>
    <input value="{{$customer->PASSWORD}}" name="PASSWORD" type="text" class="form-control" id="pwd" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-light">Submit</button>
  <input type="hidden" name="id" value="{{$customer->id_CUSTOMER}}">
</form>
</div>

@endsection