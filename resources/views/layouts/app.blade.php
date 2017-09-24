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
        <div class="container-fluid header-line-1">
            <div class="row">
                <div class="col-sm-4">
                    <div class="menu-button">меню</div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="brand-name">ООО Агролайн</div>
                </div>
                <div class="col-sm-4 text-right" style="padding-right: 0;">
                    <div class="stamp-dg"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid header-line-2 text-center">
            <div class="header-text">
                Дербент - 300 солнечных дней в году
            </div>
            <a href="#" class="header-link">О компании</a>
        </div>
    </header>

    <section id="owner">
        <div class="owner-picture">
            <img src="{{ asset('img/owner.jpg') }}" alt="">
        </div>
    </section>

    <section id="section-first">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="greetings-title">Добро пожаловать на наш сайт</div>
                    <div class="greetings-line">&nbsp;</div>
                    <div class="greetings-text">История винодельческого предприятия &laquo;Агролайн&raquo; началась в 2001 году, в удивительном по красоте месте Дагестана, между Каспийским морем и Кавказскими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.</div>
                    <div class="text-center"><img src="http://oooagrolain/files/images/wine-bottles.jpg" style="width: 250px; height: 264px;" /></div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <p>&nbsp;</p>
            <div class="greetings-title">Полная линия производства вина</div>
            <p>&nbsp;</p>

            <div class="col-md-3 col-sm-6 about-block">
                <div class="img"><img class="img-responsive" src="{{ asset('img/vineyard.jpg') }}" /></div>
                <div class="text-title">Местоположение</div>
                <p class="about-text">Виноградники винодельческого предприятия &laquo;Агролайн&raquo; расположены в удивительном по красоте месте, между Каспийским морем и Кавказкими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.</p>
            </div>

            <div class="col-md-3 col-sm-6 about-block">
                <div class="img"><img class="img-responsive" src="{{ asset('img/grapes.jpg') }}" /></div>
                <div class="text-title">Виноградники</div>
                <p class="about-text">Собстенные виноградники предприятия занимают площадь в 300 Га, из которых 100 Га являются молодыми. Саженцы отбираются в лучших питомниках как в России, так и в Европе. При этом учитываются такие важные факторы, как структура и текстура почв, особенности рельефа местности.</p>
            </div>

            <div class="col-md-3 col-sm-6 about-block">
                <div class="img"><img class="img-responsive" src="{{ asset('img/factory.jpg') }}" /></div>
                <div class="text-title">Производство</div>
                <p class="about-text">Производственный комплекс оснащен самым современным оборудованием для переработки сырья и производства вина. На предприятии собрана команда профессионалов своего дела, что позволяет создавать вина с особым &quot;характером&quot; и запоминающимся вкусом.</p>
            </div>

            <div class="col-md-3 col-sm-6 about-block">
                <div class="img"><img class="img-responsive" src="{{ asset('img/vine.jpg') }}" /></div>
                <div class="text-title">Продукция</div>
                <p class="about-text">&quot;Агролайн&quot; представляет коллекции натуральных виноградных вин в классической форме. Ассортимент вин подобран таким образом, чтобы удовлетворить разнообразные вкусы ценителей вина.</p>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </section>

    <section id="collection">
        <div class="container-fluid">
            <p>&nbsp;</p>
            <div class="collection-title">Наша коллекция</div>
            <p>&nbsp;</p>

            <div class="row">
                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-1.png') }}" alt="">
                    <div class="details">
                        <div class="name">Вино «Дербентское»</div>
                        <div class="type">Сухое, красное</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-red"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-2.png') }}" alt="">
                    <div class="details">
                        <div class="name">Бланка</div>
                        <div class="type">Сухое, красное</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-white"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-3.png') }}" alt="">
                    <div class="details">
                        <div class="name">Вино «Брют»</div>
                        <div class="type">Сухое, белое</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-red"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-4.png') }}" alt="">
                    <div class="details">
                        <div class="name">Вино «Дербентское»</div>
                        <div class="type">Сухое, красное</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-red"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-5.png') }}" alt="">
                    <div class="details">
                        <div class="name">Бланка</div>
                        <div class="type">Сухое, красное</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-white"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-4 col-sm-6 collection-item">
                    <img src="{{ asset('img/product-6.png') }}" alt="">
                    <div class="details">
                        <div class="name">Вино «Брют»</div>
                        <div class="type">Сухое, белое</div>
                        <div class="description">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                        <div class="color"><div class="color-red"></div></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div>&nbsp;</div>

        <div>&nbsp;</div>

        <div>&nbsp;</div>
    </section>


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