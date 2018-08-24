@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : $page->name)
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

            @include('partials._bottom')

        </div>
    </section>
@endsection

@section('header_scripts')
    <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
@endsection