@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : 'Каталог')
@section('keywords', $page->header ? $page->header->keywords : '')
@section('description', $page->header ? $page->header->description : '')

@section('content')
    <section id="content">
        <div class="container-fluid container-content">

            @include('partials._status')
            @include('partials._errors')

            {!! $page->text !!}

            @if ($products->count())
                <div class="content-padding" id="wine-collection">
                    <div class="row">
                        @each('catalog.product_tile', $products, 'product')
                    </div>
                </div>
            @else
                <div class="no-items">Нет продуктов</div>
            @endif

            @include('partials._bottom')

        </div>
    </section>
@endsection