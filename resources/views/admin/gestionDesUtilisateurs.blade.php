@extends('layout/admin_layout')

@section('title', 'Gestion des utilisateurs')

@section('content')
    Gestion des utilisateurs
@endsection

@section('content-two')
<div class="d-flex justify-content-center">
  <a class="btn btn-light" href="{{route('ajoutUtilisateur')}}">AJOUTER UN UTILISATEUR</a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">NAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
@foreach ($customers as $customer)   
        <tr>
          <td>{{$customer->id_CUSTOMER}}</td>
          <td>{{$customer->FIRSTNAME}}</td>
          <td>{{$customer->NAME}}</td>
          <td>{{$customer->EMAIL}}</td>
          <td>{{$customer->PASSWORD}}</td>
          <td><a href="{{route('deleteUtilisateur',['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="delete">DELETE</a>
          <a href="{{route('updateUtilisateur', ['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="update">UPDATE</a></td>
        </tr>       
@endforeach
    </tbody>
</table>
@endsection