<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-21356858-41"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-21356858-41');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="yandex-verification" content="3000fcc408e809de" />
    <meta name="google-site-verification" content="v5lDSoyaMOtOZ7AAF_Aof54JI0kRCcb6UhQg6oQ_Egs" />
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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
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
                    <div class="quality-sign">
                        <img src="{{ asset('img/stamp-small.png') }}" class="img-responsive">
                    </div>
                    <div class="quality-text">
                        <div class="line-1">Знак качества</div>
                        <div class="line-2">Семьи Давыдовых</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-6" id="top-contacts" style="opacity: 0;">
                    <div class="contacts-text">
                        <div class="line-1">Россия, Республика Дагестан, г. Дербент</div>
                        <div class="line-2">Телефон: +7 988 293 88 89</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 col-xs-4" id="menu-left" style="opacity: 0;">
                    <ul class="top-menu left">
                        <li><a href="{{ route('index') }}">Главная</a></li>
                        <li><a href="{{ route('page.show', 'about') }}">О нас</a></li>
                        <li><a href="{{ route('galleries') }}">Фотогалерея</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-xs-4 logo" id="logo" style="opacity: 0;">
                    <img src="{{ asset('img/logo.png') }}" class="img-responsive">
                </div>
                <div class="col-sm-5 col-xs-4" id="menu-right" style="opacity: 0;">
                    <ul class="top-menu right">
                        <li><a href="{{ route('catalog') }}">Карта вин</a></li>
                        <li><a href="{{ route('page.show', 'partners') }}">Партнерам</a></li>
                        <li><a href="{{ route('page.show', 'contacts') }}">Контакты</a></li>
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

<div class="modal fade" id="ageverifyModal" tabindex="-1" role="dialog" aria-labelledby="ageverifyLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="ageverifyLabel">Подтвердите свое совершеннолетие</h4>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-lg btn-danger" onclick="window.location = 'https://yandex.ru'">Мне меньше 18 лет</button>
                <button type="submit" class="btn btn-lg btn-primary" onclick="Cookies.set('validated', true, { expires: 30 });" data-dismiss="modal">Мне уже есть 18 лет</button>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        if (Cookies.get('validated') == undefined || Cookies.get('validated') == false) {
            $('#ageverifyModal').modal({backdrop: 'static'});
        }
        console.log(Cookies.get('validated'));
    });
</script>

</body>
<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
</html>