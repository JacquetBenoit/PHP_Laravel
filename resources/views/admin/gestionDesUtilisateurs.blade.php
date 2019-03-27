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
        <th scope="col">ACTIONS</th>
          <th scope="col">Rôle</th>
      </tr>
    </thead>
    <tbody>
@foreach ($customers as $customer)   
        <tr>
          <td>{{$customer->id_CUSTOMER}}</td>
          <td>{{$customer->FIRSTNAME}}</td>
          <td>{{$customer->User->name}}</td>
          <td>{{$customer->User->email}}</td>
          <td><a href="{{route('deleteUtilisateur',['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="delete">DELETE</a>
          <a href="{{route('updateUtilisateur', ['id'=>$customer->id_CUSTOMER])}}" class="btn btn-light" name="update">UPDATE</a></td>
            <td>@if($customer->User->is_admin == 1){{'Admin'}}
                @else{{'Client'}}@endif</td>
        </tr>       
@endforeach
    </tbody>
</table>
@endsection