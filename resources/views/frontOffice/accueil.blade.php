@extends('layout/public_layout')

@section('title', 'Accueil')
    
@section('nomDuSite', 'Sneakers Store')

@section('content')
    <div class="card mb-3">

        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <li><img src="{{asset('images/accueil.jpg')}}" width="600" height="400" alt="Accueil Sneakers Store"></li>
                    <li><img src="{{asset('images\Funny-cat-sunglasses.jpg')}}" width="600" height="400" alt=""></li>
                    <li><img src="{{asset('images/Mah_Jong.jpg')}}" width="600" height="400" alt=""></li>
                    <li><img src="{{asset('images/accueil.jpg')}}" width="600" height="400" alt=""></li>
                    <li><img src="{{asset('images/accueil.jpg')}}" width="600" height="400" alt=""></li>
                    <li><img src="{{asset('images/accueil.jpg')}}" width="600" height="400" alt=""></li>
                </ul>
            </div>

            {{--<p class="photo-credits">
                Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
            </p>--}}

            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>

            {{--<p class="jcarousel-pagination">--}}

            </p>
        </div>


        {{--<div class="jcarousel">
            <ul class="jcarousel-list">
                <li><img src="{{asset('images/accueil.jpg')}}" class="card-img-top" alt="Accueil Sneakers Store"></li>
                <li>...</li>
            </ul>
        </div>--}}


        {{--<div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>--}}
    </div>
@endsection
