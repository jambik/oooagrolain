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

<div class="main-container">
    <section id="logo">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo-text">{{ $settings->description }}</div>
                </div>
                <div class="col-sm-4 logo text-center">
                    <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="col-sm-4 text-right">
                    <div class="logo-text">Телефон: {{ $settings->phone }}</div>
                </div>
            </div>
        </div>
    </section>

    <header data-slides='["{{ asset('img/header-bg-1.jpg') }}","{{ asset('img/header-bg-2.jpg') }}","{{ asset('img/header-bg-3.jpg') }}"]'>
        <div id="fixed-padding" style="display: none;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"><div class="slogan-side text-shadow">Дербент</div></div>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-3"><div class="slogan-side text-shadow">300 солнечных дней в году</div></div>
            </div>
            <div class="row">
                <div class="slider-controls"></div>
            </div>
        </div>
    </header>

    <section id="menu">
        <div class="navbar-header">
            <div class="navbar-toggle collapsed" data-toggle="collapse" style="float: left; color: #fff; font-size: 16pt; margin: 5px 0 0 15px;">Меню</div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="container">
            <nav class="collapse navbar-collapse" id="navbar">
                <div class="logo-small">
                    <!--<div class="brand-name">ООО «Агролайн»</div>
                    <div class="brand-location">Дербент</div>-->
                </div>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/page/about">О нас</a></li>
                    <li><a href="/page/wines">Карта вин</a></li>
                    <li><a href="/galleries">Фотогалерея</a></li>
                    <li><a href="/page/partners">Партнерам</a></li>
                    <li><a href="/page/contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </section>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <p><img src="{{ asset('img/stamp.png') }}"></p>
                    {!! $blocks['copyright']->text !!}
                </div>
                <div class="col-xs-6 text-right">
                    <p class="alcohol-note">ЧРЕЗМЕРНОЕ УПОТРЕБЛЕНИЕ АЛКОГОЛЯ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ</p>
                </div>
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