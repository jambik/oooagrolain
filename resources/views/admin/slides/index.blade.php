@extends('admin.layouts.full')

@section('title', 'Администрирование - Слайды')

@section('content')
    <h2 class="text-center">Слайды</h2>
    <p><a href="{{ route('admin.slides.create') }}" class="btn btn-success"><i class="material-icons">add_circle</i> Добавить</a></p>

    @if ($items->count())
        <table id="table_items" class="table table-stripped table-bordered table-hover">
            <thead>
                <tr>
                    <th data-orderable="false" class="btn-collumn"></th>
                    <th>Id</th>
                    <th>Фото</th>
                    <th>Заголовок</th>
                    <th>Текст</th>
                    <th data-orderable="false" class="btn-collumn"></th>
                    <th data-orderable="false" class="btn-collumn"></th>
                </tr>
            </thead>
            <tbody class="sortable" data-entity-name="slides">
                @foreach($items as $item)
                    <tr data-item-id="{{ $item->id }}">
                        <td class="sortable-handle"><i class="material-icons">&#xE240;</i></td>
                        <td>{{ $item->id }}</td>
                        <td>@if ($item->image)<img src='/images/small/{{ $item->img_url.$item->image }}' alt='' />@endif</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->text }}</td>
                        <td><a href="{{ route('admin.slides.edit', $item->id) }}" class="btn btn-primary btn-small"><i class="material-icons">edit</i></a></td>
                        <td><button onclick="confirmDelete(this, '{{ $item->id }}')" class="btn btn-danger btn-small"><i class="material-icons">delete</i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="no-items"></div>
    @endif
@endsection
