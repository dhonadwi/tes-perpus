<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\TransactionDetail;

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
    
        
        $data['nama'] = $request->nama;
        $data['no_hp'] = $request->hp;
        $data['alamat'] = $request->alamat;
        $data['harga'] = $request->harga;
        $data['data_buku'] = 'data_buku';
        
        $transaction = Transaction::create($data);

        $id = $transaction->id;
        $data_buku['transaction_id'] = $id;

        foreach ($request->data_buku as $item) {
            if($item != ""){
            $tes = explode(",", $item);
                $data_buku['book_id'] = $tes[0];
            TransactionDetail::create($data_buku);
            }
        }
        return redirect()->route('list-sewa');
    }

    public function show(Request $request)
    {
        $transactions = Transaction::with(['transactionDetails'])->get();
        // $details = Transaction::find(2)->transactionDetails;
        // return $transactions;
        // return $details;
        return view('pages.list-sewa',[
            'title'=> 'list-sewa',
            'transactions' => $transactions
        ]);
    }

    public function remove(Request $request)
    {
        foreach ($request['delete'] as $id) {
            $transaction = Transaction::findOrFail($id);
            $transaction->delete();
        }

        return redirect()->route('list-sewa');
    }
}
