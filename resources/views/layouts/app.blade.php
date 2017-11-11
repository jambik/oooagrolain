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
<div class="main-container">

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="top-pattern"></div>
                <div class="col-xs-6" id="quality-sign" style="opacity: 0;">
                    <div class="quality-sign hidden-xs"></div>
                    <div class="quality-text">
                        <div class="line-1">Знак качества</div>
                        <div class="line-2">Дербентские вина</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6" id="top-contacts" style="opacity: 0;">
                    <div class="contacts-text">
                        <div class="line-1">Россия, Республика Дагестан, г. Дербент</div>
                        <div class="line-2">Телефон: +7 964 257 77 77</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-xs-4" id="menu-left" style="opacity: 0;">
                    <ul class="top-menu left">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Фотогалерея</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-xs-4 logo" id="logo" style="opacity: 0;">
                    <img src="{{ asset('img/logo.png') }}" class="img-responsive">
                </div>
                <div class="col-sm-5 col-xs-4" id="menu-right" style="opacity: 0;">
                    <ul class="top-menu right">
                        <li><a href="#">Карта вин</a></li>
                        <li><a href="#">Партнерам</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

</div>

<button onclick="topFunction()" id="myBtn" title="Наверх"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br>наверх</button>

@include('partials._callback')
@include('partials._flash')
@include('partials._metrika')

@yield('footer_scripts')

</body>
</html>