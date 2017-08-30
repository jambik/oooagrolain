@extends('admin.layouts.full')

@section('title', 'Администрирование - Категории')

@section('content')
    <h2 class="text-center">Категории</h2>

    <app-categories></app-categories>
@endsection

@section('head_scripts')
    <script src="/library/jstree/jstree.min.js"></script>
    <link rel="stylesheet" href="/library/jstree/themes/default/style.min.css" />

    <script src="/library/summernote/summernote.min.js"></script>
    <script src="/library/summernote/lang/summernote-ru-RU.min.js"></script>
    <link rel="stylesheet" href="/library/summernote/summernote.css" />
@endsection

@section('footer_scripts')
    <script src="/js/vue.js"></script>
@endsection