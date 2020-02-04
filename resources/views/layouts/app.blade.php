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
                        <li><a href="" class="grey-text bold">Inicio</a></li>
                        <li><a href="" class="grey-text bold">Registro</a></li>
                        <li><a href="" class="grey-text bold">Beneficios</a></li>
                        <li><a href="" class="grey-text bold">Noticias</a></li>
                        <li><a href="" class="i-f"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="" class="i-w"><i class="fab fa-whatsapp-square fa-2x"></i></a></li>
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
