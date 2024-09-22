<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //Вывод всех книг
    public function index()
    {
        // Получаем все книги из базы данных
        $books = Book::all();
        // Возвращаем представление с книгами
        return view('index', compact('books'));
    }

    public function create(Request $request)
    {
        return view('create');
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     'genre' => 'required|string|max:255',
        // ]);
        // Book::create($validatedData);
        // return redirect()->route('books.create')->with('success', 'Книга успешно добавлена!');
    }
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'title' => 'required|string|max:255|unique:books,title',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'genre' => 'required|string',
        ], [
            'title.required' => 'Название книги обязательно к заполнению.',
            'title.max' => 'Название книги не должно превышать 255 символов.',
            // 'title.unique' => 'Книга с таким названием уже существует.',
            'author.required' => 'Имя автора обязательно к заполнению.',
            'author.max' => 'Имя автора не должно превышать 100 символов.',
            'genre.required' => 'Жанр обязательно к заполнению.',
        ]);
        Book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'Книга успешно добавлена!');
    }

    //Отрисовка контактов
    public function contacts()
    {
        $address = 'Беларусь, Гомель, ул. Белицкая, 23-109';
        $post_code = '246043';
        $email = 'kastett@mail.ru';
        $phone = '+375291586850';
        return view('contacts', compact('address', 'post_code', 'email', 'phone'));
    }
}
