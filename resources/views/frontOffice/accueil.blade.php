@extends('layout/public_layout')

@section('title', 'Accueil')
    
@section('nomDuSite', 'Sneakers Store')

@section('content')
    <div class="card mb-3">
        <img src="{{asset('images/accueil.jpg')}}" class="card-img-top" alt="Accueil Sneakers Store">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
@endsection
