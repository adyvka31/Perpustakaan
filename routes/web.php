<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::match(['GET', 'POST'], '/home', [BookController::class, 'index'], function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/mybook', [BookController::class, 'mybook'])->name('mybook');
    Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
    Route::post('/book', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/{book}', [BookController::class, 'detail'])->name('book.detail');
    Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('/book/{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
});

require __DIR__.'/auth.php';
