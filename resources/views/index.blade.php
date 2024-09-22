@extends('default')
@section('content')
    <div class="container mt-5">
        <h1>Список книг</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr><th>ID</th>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Жанр</th></tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr><td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->genre }}</td></tr>
                @endforeach
            </tbody>
        </table>
        <!-- <a href="{{ route('books.create') }}" class="btn btn-primary">Добавить новую книгу</a> -->
    </div>
@stop
