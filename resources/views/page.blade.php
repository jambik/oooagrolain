@extends('layouts.app')

@section('title', $page->header ? ($page->header->title ?: $page->name) : $page->name)
@section('keywords', $page->header ? $page->header->keywords : '')
@section('description', $page->header ? $page->header->description : '')

@section('slides')
    @include('partials._slides')
@endsection

@section('content')
    <div class="container content">
        @include('partials._status')
        @include('partials._errors')

        {!! $page->text !!}

        @if ($page->slug == 'wines')
            <p>&nbsp;</p>
            <div class="row products">
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-1.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Полнотелое, элегантное вино с прекрасным балансом, великолепной структурой и продолжительным многогранным сладковатым послевкусием.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-2.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Насыщенный пурпурный цвет. Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-3.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками. Насыщенный пурпурный цвет.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-4.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-5.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Полнотелое, элегантное вино с прекрасным балансом, великолепной структурой и продолжительным многогранным сладковатым послевкусием.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-6.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Насыщенный пурпурный цвет. Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-7.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками. Насыщенный пурпурный цвет.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
                <div class="col-sm-3 product-item">
                    <img src="{{ asset('img/product-1.png') }}">
                    <div class="product-name">Сухое красное</div>
                    <div class="product-description">Богатый, изысканный букет, в котором виноградные нотки очень гармонично дополнены фруктовыми тонами с цветочными оттенками.</div>
                    <div class="product-spec">Объем 0,7 л</div>
                    <div class="product-spec">Спирт 10-12% об.</div>
                </div>
            </div>
        @endif

        @if ($page->slug == 'contacts')
            <div>&nbsp;</div>
            <hr>
            <h3>Обратная связь</h3>
            <div>&nbsp;</div>
            <div class="col-md-6">
                <form action="{{ route('feedback.send') }}" method="POST" id="form_feedback">
                    {!! Form::token() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="name" placeholder="Имя" value="{{ old('name') }}">
                    </div>
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="phone" placeholder="Телефон" value="{{ old('phone') }}">
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <textarea class="form-control" name="message" placeholder="Сообщение" style="min-height: 150px;">{{ old('message') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Отправить сообщение</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection

@section('header_scripts')
    <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
@endsection