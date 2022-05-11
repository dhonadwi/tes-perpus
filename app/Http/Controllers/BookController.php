<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.book',[
            'title'=> 'book'
        ]);
    }
}