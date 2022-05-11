<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {   
        $books = Book::all();
        return view('pages.book',[
            'title'=> 'book',
            'books' => $books
        ]);
    }

    public function add(Request $request)
    {
        return view('pages.book-add',[
            'title'=> 'book'
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        Book::create($data);
        return redirect()->route('buku');
    }
}
