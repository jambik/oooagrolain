@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : $page->name)
@section('keywords', $page->header ? $page->header->keywords : '')
@section('description', $page->header ? $page->header->description : '')

@section('content')
    <section id="content">
        <div class="container-fluid container-content">

            <div class="content-padding">
                <p>&nbsp;</p>
                <div class="owl-carousel owl-theme" id="carousel">
                    <img src="{{ asset('img/picture-5.jpg') }}">
                    <img src="{{ asset('img/picture-1.jpg') }}">
                    <img src="{{ asset('img/picture-2.jpg') }}">
                    <img src="{{ asset('img/picture-3.jpg') }}">
                    <img src="{{ asset('img/picture-4.jpg') }}">
                </div>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row" id="enter-title" style="opacity: 0;">
                <div class="pattern-line">
                    <h1>Винодельческое хозяйство ООО «Агролайн»</h1>
                </div>
            </div>
            <p>&nbsp;</p>

            <div class="enter-text" id="enter-text" style="opacity: 0;">
                История винодельческого предприятия ООО «Агролайн» началась в 2001 году, в удивительном по красоте месте Дагестана, между Каспийским морем и Кавказскими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding" id="enter-blocks">
                <div class="row">
                    <div class="col-md-4 col-sm-6 block-about" id="enter-block-1" style="opacity: 0;">
                        <div class="inner">
                            <img src="{{ asset('img/vineyard.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Виноградники</div>
                            <div class="text">Виноградники винодельческого предприятия ООО «Агролайн» расположены в удивительном по красоте месте, между Каспийским морем и Кавказкими горами. Этот удивительный уголок благодатного края будто самой природой был предназначен для выращивания винограда и виноделия.</div>
                            <div class="button"><a href="{{ route('page.show', 'about') }}" class="btn">Подробнее</a></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 block-about" id="enter-block-2" style="opacity: 0;">
                        <div class="inner">
                            <img src="{{ asset('img/production.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Производство</div>
                            <div class="text">Производственный комплекс оснащен самым современным оборудованием для переработки сырья и производства вина. На предприятии собрана команда профессионалов своего дела, что позволяет создавать вина с особым "характером" и запоминающимся вкусом.</div>
                            <div class="button"><a href="{{ route('page.show', 'about') }}" class="btn">Подробнее</a></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 block-about" id="enter-block-3" style="opacity: 0;">
                        <div class="inner">
                            <img src="{{ asset('img/products.jpg') }}">
                            <div class="pattern"></div>
                            <div class="name">Продукция</div>
                            <div class="text">ООО «Агролайн» представляет коллекции натуральных виноградных вин в классической форме. Ассортимент вин подобран таким образом, чтобы удовлетворить разнообразные вкусы ценителей вина.</div>
                            <div class="button"><a href="{{ route('catalog') }}" class="btn">Подробнее</a></div>
                            <div class="pattern"></div>
                        </div>
                    </div>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="row" id="wine-collection-title" style="opacity: 0;">
                <div class="pattern-line">
                    <h1>Коллекция вин</h1>
                </div>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <div class="content-padding" id="wine-collection">
                <div class="row">

                    @if ($products->count())
                        @foreach($products as $product)
                            <div class="col-md-6 product-block" id="wine-{{ $loop->iteration }}" style="opacity: 0;">
                                <div class="img">
                                    @if ($product->image)
                                        <a class="popup-product" title="{{ $product->name }}" href="/images/original/{{ $product->img_url . $product->image }}">
                                            <img src="/images/medium/{{ $product->img_url . $product->image }}" class="img-responsive">
                                        </a>
                                    @else
                                        <img src="/img/default.png" class="img-responsive">
                                    @endif
                                </div>
                                <div class="description">
                                    <div class="name">{{ $product->name }}</div>
                                    <div class="type">@if ($product->type){{ trans('vars.type')[$product->type] }}@endif</div>
                                    <div class="about">{{ $product->brief }}</div>
                                    <div class="volume">{{ $product->volume ? 'Объем '.$product->volume : '' }}</div>
                                    <div class="strength">{{ $product->strength ? 'Спирт '.$product->strength : '' }}</div>
                                    @if ($product->type == 1)
                                        <div class="wine-type red"></div>
                                    @elseif ($product->type == 2)
                                        <div class="wine-type white"></div>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endforeach

                        {{--<div class="clearfix"></div>--}}
                        <a class="all-wines" href="{{ route('catalog') }}">Вся карта вин</a>
                    @else
                        <div class="no-items">Раздел пока пуст</div>
                    @endif
                </div>
            </div>

            @include('partials._bottom')

        </div>
    </section>
@endsection