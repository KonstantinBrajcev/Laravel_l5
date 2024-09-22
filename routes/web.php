<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [BookController::class, 'index'])->name('books.index');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/store', [BookController::class, 'store'])->name('books.store');
Route::get('/contacts', [BookController::class, 'contacts'])->name('books.contacts');
