<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applicationp. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/buku', 'BookController@index')->name('buku');
Route::get('/buku/add', 'BookController@add')->name('tambah-buku');
Route::get('/transaksi', 'TransactionController@index')->name('transaksi');