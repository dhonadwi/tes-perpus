<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();
        return view('pages.transaction',[
            'title'=> 'transaction',
            'books' => $books
        ]);
    }
}
