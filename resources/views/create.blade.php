@extends('default')
@section('content')
<div class="add_books">
<h1>Добавить книгу</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form name="add_new_book" id="add_new_book" method="POST" action="{{route('books.store')}}">
    @csrf
        <div class="form_selection">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form_selection">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form_selection">
            <label for="genre">Choose genre:</label>
            <select name="genre" id="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="mystery">Mystery</option>
                <option value="drama">Drama</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@stop
