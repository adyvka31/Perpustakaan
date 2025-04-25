<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'regsiter']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [BookController::class, 'index'])->name('index');
Route::post('/home', [BookController::class, 'index'])->name('index');
// Route::match(['get', 'post'], '/', [BookController::class, 'index'])->name('index');
Route::get('/mybook', [BookController::class, 'mybook'])->name('mybook');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book/{book}', [BookController::class, 'detail'])->name('book.detail');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.destroy');
