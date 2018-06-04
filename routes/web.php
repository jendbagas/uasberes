<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Controller Buku
Route::get('/buku', 'BukuController@index')->name('buku.index');
Route::get('/buku/create', 'bukuController@create')->name('buku.create');
Route::post('/buku/create','BukuController@store');
Route::get('/buku/{buku}/edit', 'BukuController@edit')->name('buku.edit');
Route::post('/buku/{buku}/edit', 'BukuController@update')->name('buku.update');
Route::delete('/buku/{buku}/delete', 'BukuController@destroy')->name('buku.destroy');



// Controller Kategori
Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
Route::post('/kategori/create','KategoriController@store');
Route::get('/kategori/{kategori}/edit', 'KategoriController@edit')->name('kategori.edit');
Route::post('/kategori/{kategori}/edit', 'KategoriController@update')->name('kategori.update');
Route::delete('/kategori/{kategori}/delete', 'KategoriController@destroy')->name('kategori.destroy');


// Controller Lokasi
Route::get('/lokasi', 'LokasiController@index')->name('lokasi.index');
Route::get('/lokasi/create', 'LokasiController@create')->name('lokasi.create');
Route::post('/lokasi/create','LokasiController@store');
Route::get('/lokasi/{lokasi}/edit', 'LokasiController@edit')->name('lokasi.edit');
Route::post('/lokasi/{lokasi}/edit', 'LokasiController@update')->name('lokasi.update');
Route::delete('/lokasi/{lokasi}/delete', 'LokasiController@destroy')->name('lokasi.destroy');


// Controller Lokasi
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi.index');
Route::get('/transaksi/create', 'TransaksiController@create')->name('transaksi.create');
Route::post('/transaksi/create','TransaksiController@store');
Route::get('/transaksi/{transaksi}/edit', 'TransaksiController@edit')->name('transaksi.edit');
Route::post('/transaksi/{transaksi}/edit', 'TransaksiController@update')->name('transaksi.update');
Route::delete('/transaksi/{transaksi}/delete', 'TransaksiController@destroy')->name('transaksi.destroy');
Route::get('/pengembalian', 'TransaksiController@pengembalian')->name('pengembalian');
Route::get('/transaksi/{transaksi}/kembali', 'TransaksiController@kembali')->name('transaksi.kembali');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
