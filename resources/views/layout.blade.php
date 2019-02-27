<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - ma boutique</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
        
    </head>
<header>
    @include('menu')
</header>   
<body>
    <div class="content">
        <div class="title m-b-md">
          @yield('content')
        </div>
</body>
</html>