<div class="form-group">
    {!! Form::label('name', 'Название') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

@if (isset($item))
    <div class="form-group">
        {!! Form::label('slug', 'Alias') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        <small>alias для красивого отображения url</small>
    </div>
@endif

{{--<div class="form-group">
    {!! Form::label('price', 'Цена') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>--}}

<div class="form-group">
    {!! Form::label('category_id', 'Категория') !!}
    {!! Form::select('category_id', $categories, isset($categoryId) ? $categoryId : null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('brief', 'Описание продукта') !!}
    {!! Form::textarea('brief', null, ['rows' => 5, 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('volume', 'Объем') !!}
    {!! Form::text('volume', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('strength', 'Крепость') !!}
    {!! Form::text('strength', null, ['class' => 'form-control']) !!}
</div>

{{--<div class="form-group input-html">
    {!! Form::label('text', 'Полное описание продукта') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>--}}

@include('admin.partials._imageable')

@include('admin.partials._headerable')

<div class="form-group text-center">
    <button type="submit" class="btn btn-lg btn-primary"><i class="material-icons">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="text-center">
    <a href="{{ isset($item) ? route('admin.products.index') . '?category=' . $item->category_id : session()->previousUrl() }}" class="btn btn-default">Отмена</a>
</div>

@section('head_scripts')
    <script src="/library/ckeditor/ckeditor.js"></script>
@endsection