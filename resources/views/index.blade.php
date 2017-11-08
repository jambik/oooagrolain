@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : $page->name)
@section('keywords', $page->header ? $page->header->keywords : '')
@section('description', $page->header ? $page->header->description : '')

@section('content')
    <section id="content">
        <div class="container-fluid container-content">
            <div class="content-padding">
                <div class="carousel">
                    <div class="arrow-left"></div>
                    <div class="picture"><img src="{{ asset('img/picture-1.jpg') }}"></div>
                    <div class="arrow-right"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row">
                <div class="pattern-line">
                    <h1>Винодельческое хозяйство Агролайн</h1>
                </div>
            </div>
            <p>&nbsp;</p>

            <div class="enter-text">
                История винодельческого предприятия «Агролайн» началась в 2001 году, в удивительном по красоте месте Дагестана, между Каспийским морем и Кавказскими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding">
                <div class="row">
                    <div class="col-md-4 block-about">
                        <div class="inner">
                            <img src="{{ asset('img/vineyard.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Виноградники</div>
                            <div class="text">Виноградники винодельческого предприятия «Агролайн» расположены в удивительном по красоте месте, между Каспийским морем и Кавказкими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.</div>
                            <div class="button"><button class="btn">Подробнее</button></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                    <div class="col-md-4 block-about">
                        <div class="inner">
                            <img src="{{ asset('img/production.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Производство</div>
                            <div class="text">Производственный комплекс оснащен самым современным оборудованием для переработки сырья и производства вина. На предприятии собрана команда профессионалов своего дела, что позволяет создавать вина с особым "характером" и запоминающимся вкусом.</div>
                            <div class="button"><button class="btn">Подробнее</button></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                    <div class="col-md-4 block-about">
                        <div class="inner">
                            <img src="{{ asset('img/products.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Продукция</div>
                            <div class="text">«Агролайн» представляет коллекции натуральных виноградных вин в классической форме. Ассортимент вин подобран таким образом, чтобы удовлетворить разнообразные вкусы ценителей вина.</div>
                            <div class="button"><button class="btn">Подробнее</button></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row">
                <div class="pattern-line">
                    <h1>Коллекция вин</h1>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding">
                <div class="row">
                    <div class="col-md-6 product-block">
                        <div class="img"><img src="{{ asset('img/product-caberne.jpg') }}"></div>
                        <div class="description">
                            <div class="name">Каберне Савиньон</div>
                            <div class="type">сухое, красное</div>
                            <div class="about">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                            <div class="wine-type red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 product-block">
                        <div class="img"><img src="{{ asset('img/product-rkaciteli.jpg') }}"></div>
                        <div class="description">
                            <div class="name">Ркацители</div>
                            <div class="type">сухое, белое</div>
                            <div class="about">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                            <div class="wine-type white"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 product-block">
                        <div class="img"><img src="{{ asset('img/product-saperavi.jpg') }}"></div>
                        <div class="description">
                            <div class="name">Саперави</div>
                            <div class="type">сухое, белое</div>
                            <div class="about">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                            <div class="wine-type white"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 product-block">
                        <div class="img"><img src="{{ asset('img/product-shardone.jpg') }}"></div>
                        <div class="description">
                            <div class="name">Шардоне</div>
                            <div class="type">сухое, красное</div>
                            <div class="about">Букет развитый, на фоне спелых желтых фруктов доминируют яблочные ноты.</div>
                            <div class="wine-type red"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="owner row">
                <div class="col-md-6 owner-text">
                    <div class="owner-name">Давыдов Год Пануилович</div>
                    <div class="owner-pic"></div>
                    <div class="owner-text-1">Наша миссия не только сохранить, но и приумножить традиции виноделия Дербента. Мы хотим внести свой собственный, пусть и небольшой, вклад в развитие отрасли в нашей любимой стране.</div>
                    <div class="owner-text-2">Только натуральное вино отменного качества заслуживает того, чтобы оказаться на вашем столе!</div>
                    <div class="owner-stamp"></div>
                </div>
                <div class="col-md-6 owner-photo">
                    <img src="{{ asset('img/owner.jpg') }}" class="img-responsive">
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding">
                <div class="row">
                    <div class="col-md-4 feedback-form">
                        <div class="form-caption">Напишите нам</div>
                        <p>&nbsp;</p>
                        <form>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Ваше email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Ваше сообщение"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-lg">Отправить сообщение</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 col-md-offset-1 bottom-stamp">
                        <img src="{{ asset('img/stamp-big.png') }}">
                    </div>
                    <div class="col-md-5">
                        <ul class="bottom-menu">
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Фотогалерея</a></li>
                            <li><a href="#">Карта вин</a></li>
                            <li><a href="#">Партнерам</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>

                        <div class="bottom-contacts">
                            <div class="contact-line">
                                <div class="icon"><img src="{{ asset('img/icon-map.png') }}"></div>
                                <div class="line">368608, Россия, Республика Дагестан, г. Дербент, ул. М. Долгата, 24, А</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="contact-line">
                                <div class="icon"><img src="{{ asset('img/icon-phone.png') }}"></div>
                                <div class="line">Телефон +7 964 257 77 77</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="contact-line">
                                <div class="icon"><img src="{{ asset('img/icon-email.png') }}"></div>
                                <div class="line">Email для связи - oooagrolain@yandex.ru</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row inline-gallery">
                <img src="{{ asset('img/gallery-1.jpg') }}">
                <img src="{{ asset('img/gallery-2.jpg') }}">
                <img src="{{ asset('img/gallery-3.jpg') }}">
                <img src="{{ asset('img/gallery-4.jpg') }}">
                <img src="{{ asset('img/gallery-5.jpg') }}">
            </div>
        </div>
    </section>
@endsection