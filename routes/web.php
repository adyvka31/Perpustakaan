<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('index');
Route::post('/', [BookController::class, 'index'])->name('index');
// Route::match(['get', 'post'], '/', [BookController::class, 'index'])->name('index');
Route::get('/mybook', [BookController::class, 'mybook'])->name('mybook');
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::get('/edit', [BookController::class, 'edit'])->name('edit');
Route::get('/detail', [BookController::class, 'detail'])->name('detail');