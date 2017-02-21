<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    {!! Html::style( 'assets/dist/css/materialize.css' ) !!}
    <style>
        body { font-family: 'Lato';}
        .fa-btn { margin-right: 6px; }
    </style>
</head>
<body id="app-layout">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                @if( Auth::guest() )
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="{{ url('/logout') }}"> {{Auth::user()->name}} Logout</a></li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')
    
    {!! Html::script('app-angular/angular.js') !!}
    {!! Html::script('assets/dist/js/bin/jquery-3.1.1.min.js') !!}
    {!! Html::script('assets/dist/js/bin/materialize.min.js') !!}

    {!! Html::script('app-angular/app.js') !!}
    {!! Html::script('app-angular/controllers/bikes.js') !!}
</body>
</html>
