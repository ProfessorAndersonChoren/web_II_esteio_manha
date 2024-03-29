<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.login');

// Rotas autenticadas
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/create', [BookController::class, 'store'])->name('book.store');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/edit/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');
