<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;

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

    public function add(Request $request)
    { 
        $data_buku = [];
    
        foreach ($request->data_buku as $item) {
            if($item != ""){
            $tes = explode(",", $item);
            array_push($data_buku, $tes[0]);
            }
        }
        serialize($data_buku);

        $data['nama'] = $request->nama;
        $data['no_hp'] = $request->hp;
        $data['alamat'] = $request->alamat;
        $data['harga'] = $request->harga;
        $data['data_buku'] = $data_buku;
        
        Transaction::create($data);
        return redirect()->route('dashboard');
    }
}
