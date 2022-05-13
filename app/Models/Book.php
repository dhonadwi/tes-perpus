<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    // protected $fillable = [
    //     'id_buku','judul_buku', 'kategori', 'harga'
    // ];

    protected $guarded = [
        'id'
    ];
   
}
