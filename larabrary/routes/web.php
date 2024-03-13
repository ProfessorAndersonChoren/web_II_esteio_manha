<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'index'])->name('user.login');

// Rotas autenticadas
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create',[BookController::class,'create'])->name('book.create');
