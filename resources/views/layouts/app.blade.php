<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Presta Express</title>
        <link rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/preloader.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="{{ asset('js/preloader.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    </head>

<body>

    <div id="page-loader"><span class="preloader-interior"></span></div>

    @include('layouts.header')

    <div class="container-fluid">
        <div class="row no-space">
            @include('layouts.left-menu')

            <!-- Contenido página -->
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
