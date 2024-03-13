<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Buscar todos os livros cadastrados no banco
        $books = Book::all();
        // Passa os livros para a tela de listagem
        return view('auth.dashboard',compact('books'));
    }

    public function create()
    {
        return view('auth.new-book');
    }
}
