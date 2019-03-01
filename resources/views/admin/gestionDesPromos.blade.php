@extends('layout/admin_layout')

@section('title', 'Gestion des promotions')

@section('content')
    Gestion des promotions
@endsection

@section('tableau')
<table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">categorie</th>
            <th scope="col">quantitée</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>exemple</td>
            <td>chaussure</td>
            <td>25</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>exemple2</td>
            <td>chaussure</td>
            <td>64</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">exemple3</td>
            <td>53</td>
          </tr>
        </tbody>
      </table>
@endsection