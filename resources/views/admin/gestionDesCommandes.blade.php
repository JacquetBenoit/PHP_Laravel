@extends('layout/admin_layout')

@section('title', 'Gestion des commandes')

@section('content')
    Gestion des commandes
@endsection

@section('tableau')
<table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">mail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>exemple</td>
            <td>chaussure</td>
            <td>@yolo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>exemple2</td>
            <td>chaussure</td>
            <td>@coucou</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">exemple3</td>
            <td>@salut</td>
          </tr>
        </tbody>
      </table>
@endsection
    
