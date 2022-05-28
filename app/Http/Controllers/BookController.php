<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
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
            'title'=> 'book',
            
        ]);
    }

    public function create(BookRequest $request)
    {

        $data = $request->all();

        Book::create($data);
        return redirect()->route('buku')->with('message','Data Buku sudah Tersimpan');
    }

    public function remove(Request $request)
    {
        foreach ($request['delete'] as $id) {
            $book = Book::findOrFail($id);
            $book->delete();
        }

        return redirect()->route('buku')->with('message','Data Buku Sudah Terhapus');
    }
}
