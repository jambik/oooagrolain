<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:100&amp;subset=cyrillic" rel="stylesheet">
    <link href="{{ asset('/css/app.bundle.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script src="{{ asset('/js/app.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    @yield('header_scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>@yield('title')</title>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/">Главная</a>
    <a href="/page/about">О компании</a>
    <a href="/catalog">Карта вин</a>
    <a href="/galleries">Фотогалерея</a>
    <a href="/page/partners">Партнерам</a>
    <a href="/page/contacts">Контакты</a>
</div>

<div class="main-container">

    @yield('header')

    @yield('content')

    <footer>
        <div class="container">
            <div class="row text-center">
                <p class="alcohol-note">ЧРЕЗМЕРНОЕ УПОТРЕБЛЕНИЕ АЛКОГОЛЯ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ</p>
            </div>
            <div class="row text-center">
                <img src="{{ asset('img/stamp-dg-small.png') }}" class="stamp-bottom" alt="">
                <div class="brand-bottom">Агролайн</div>
            </div>
        </div>
    </footer>
</div>

@include('partials._callback')
@include('partials._flash')
@include('partials._metrika')

@yield('footer_scripts')

</body>
</html>