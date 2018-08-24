@extends('layouts.app')

@section('title', isset($item->header) && $item->header ? ($item->header->title ?: $item->name) : 'Фотогалерея')
@section('keywords', isset($item->header) && $item->header ? $item->header->keywords : '')
@section('description', isset($item->header) && $item->header ? $item->header->description : '')

@section('content')
    <section id="content">
        <div class="container-fluid container-content">

            @include('partials._status')
            @include('partials._errors')

            <p>&nbsp;</p>
            <div><a href="{{ route('galleries') }}"><i class="fa fa-chevron-left"></i> все альбомы</a></div>

            <p>&nbsp;</p>

            <div class="row pattern-line">
                <h1>{{ $item->name }}</h1>
            </div>

            <p>&nbsp;</p>
            <p>&nbsp;</p>

            @if ($item->photos->count())
                <div class="gallery-photos">
                    @foreach ($item->photos as $val)
                        <a class="popup-gallery" title="{{ $val->name }}" href="/images/original/{{ $val->img_url . $val->image }}"><img src="/images/small/{{ $val->img_url . $val->image }}" class="img-thumbnail" alt="{{ $val->name }}"></a>
                    @endforeach
                </div>
            @else
                <div class="no-items">Раздел пока пуст</div>
            @endif

            @include('partials._bottom')

        </div>
    </section>
@endsection