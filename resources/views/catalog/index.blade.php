@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : 'Каталог')
@section('keywords', $page->header ? $page->header->keywords : '')
@section('description', $page->header ? $page->header->description : '')

@section('content')
    <section id="content">
        <div class="container-fluid container-content">
            @include('partials._status')
            @include('partials._errors')

            <div class="content-padding">
                {!! $page->text !!}
            </div>
            <hr>

            @if ($products->count())
                <div class="row products-tiles">
                    @each('catalog.product_tile', $products, 'product')
                </div>
            @else
                <div class="no-items">Нет продуктов</div>
            @endif
            {{--<div class="row categories-list">
                @foreach($categories as $category)
                    <div class="col-md-4 category">
                        <div class="">
                            <a href="{{ route('catalog.category', $category->slug) }}">
                                <div class="img">
                                    @if ($category->image)
                                        <img src="/images/medium/{{ $category->img_url . $category->image }}" class="img-responsive img-thumbnail img-circle">
                                    @else
                                        <img src="/img/default.png" class="img-responsive img-thumbnail img-circle">
                                    @endif
                                </div>
                                <div class="name">{{ $category->name }}</div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>--}}

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="owner row">
                <div class="col-md-6 owner-text">
                    <div class="owner-name">Давыдов Год Пануилович</div>
                    <div class="owner-pic"></div>
                    <div class="owner-text-1">Наша миссия не только сохранить, но и приумножить традиции виноделия Дербента. Мы хотим внести свой собственный, пусть и небольшой, вклад в развитие отрасли в нашей любимой стране.</div>
                    <div class="owner-text-2">Только натуральное вино отменного качества заслуживает того, чтобы оказаться на вашем столе!</div>
                    <div class="owner-stamp"></div>
                </div>
                <div class="col-md-6 owner-photo">
                    <img src="{{ asset('img/owner.jpg') }}" id="owner-photo" style="opacity: 0;" class="img-responsive">
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding">
                <div class="row">
                    <div class="col-md-5 feedback-form">
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
                    <div class="col-md-2 bottom-stamp">
                        <img src="{{ asset('img/stamp-big.png') }}" class="img-responsive">
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