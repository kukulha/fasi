<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="fondo">
    <div class="navbar-fixed">
        <nav class="white nav-extended">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" class="responsive-img" width="150px" alt=""></a>
                    <a href="" data-target="movil" class="sidenav-trigger"><i class="material-icons orange-text">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        @auth
                            <li><a href="{{ route('home') }}" class="grey-text bold">Inicio</a></li>
                            <li><a href="{{ route('messages.index') }}" class="grey-text bold">Mensajes</a></li>
                            <li><a href="{{ route('categories.index') }}" class="grey-text bold">Categorías</a></li>
                            <li><a href="{{ route('posts.index') }}" class="grey-text bold">Artículos</a></li>
                            <li>
                                {{ Form::open(['route' =>'logout', 'method' => 'post']) }}
                                    {{ Form::submit('Cerrar Sesión', ['class' => ' btn red bold']) }}
                                {{ Form::close() }}
                            </li>
                        @endauth
                        @guest
                            <li><a href="{{ route('home') }}#home" class="grey-text bold">Inicio</a></li>
                            <li><a href="{{ route('home') }}#register" class="grey-text bold">Registro</a></li>
                            <li><a href="{{ route('home') }}#benefits" class="grey-text bold">Beneficios</a></li>
                            <li><a href="{{ route('home') }}#blog" class="grey-text bold">Noticias</a></li>
                            <li><a href="http://bit.ly/2Ssiafg" class="i-f"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=5213481216767&text=Quiero%20m%E1s%20informaci%F3n" class="i-w"><i class="fab fa-whatsapp-square fa-2x"></i></a></li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>
    </div>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

    <script src="https://kit.fontawesome.com/3d376d57db.js" crossorigin="anonymous"></script>

</body>
</html>
