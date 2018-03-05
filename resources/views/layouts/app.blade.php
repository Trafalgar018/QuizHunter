<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/questionary.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-toggleable-md navbar-dark" style="background-color: #2a2a2a">

        <div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand" href="{{ route ('home') }}">QuizHunter</a>
        </div>

        <form class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar por tags">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>

        @guest
        @else
            <a class="navbar-brand" href="/profile/{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
        @endguest

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route ('login') }}">Iniciar sesion</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route ('register') }}">Registrarse</a>
                </li>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route ('create_questionnary') }}">Crear cuestionario<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route ('create_question') }}">Crear pregunta<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    @endguest

            
            </ul>
        </div>
    </nav>
    @yield('content')



</div>
</body>
</html>
