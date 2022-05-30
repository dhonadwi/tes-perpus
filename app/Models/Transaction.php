<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    // protected $fillable = [
    //     'nama','no_hp', 'alamat', 'harga', 'data_buku'
    // ];
    protected $guarded = [
        'id'
    ];

    protected $casts = [
    'data_buku' => 'array', // Will convarted to (Array)
    ];



    public function transactionDetails() {
        return $this->hasMany(transactionDetail::class)->with(['book']);
    }
}
