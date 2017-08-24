<div class="form-group">
    {!! Form::label('title', 'Заголовок новости') !!}
    {!! Form::text('title', null, ['class' => 'form-control'.($errors->has('title') ? ' invalid' : '')]) !!}
</div>

<div class="form-group input-html">
    {!! Form::label('text', 'Текст новости') !!}
    {!! Form::textarea('text', null, ['class' => 'validate materialize-textarea'.($errors->has('text') ? ' invalid' : '')]) !!}
</div>

<div class="form-group input-datetime">
    {!! Form::label('published_at', 'Дата публикации') !!}
    {!! Form::text('published_at', null, ['class' => 'form-control'.($errors->has('published_at') ? ' invalid' : '')]) !!}
</div>

@include('admin.partials._imageable')

<div class="form-group text-center">
    <button type="submit" class="btn btn-lg btn-primary"><i class="material-icons">check_circle</i> {{ $submitButtonText }}</button>
</div>

<div class="form-group text-center">
    <a href="{{ route('admin.news.index') }}" class="btn btn-default">Отмена</a>
</div>

@section('head_scripts')
    <script src="/library/ckeditor/ckeditor.js"></script>
@endsection