<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/beranda', function () {
    return view('beranda.beranda');
});

Route::get('/detail', function () {
    return view('beranda.grafik');
});

Route::get('/produk', function () {
    return view('produk.read');
});
Route::get('/produk/tambahkan', function () {
    return view('produk.create');
});
Route::get('/produk/edit', function () {
    return view('produk.update');
});

Route::get('/totalan', function () {
    return view('transaksi.transaksi');
});
Route::get('/profil', function () {
    return view('akun.profil');
});
Route::get('/profil/ubah-username', function () {
    return view('akun.username');
});
Route::get('/profil/ubah-password', function () {
    return view('akun.password');
});