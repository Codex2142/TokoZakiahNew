<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/beranda', function () {
    return view('beranda.beranda');
});

Route::get('/detail', function () {
    return view('beranda.grafik');
});


Route::get('/produk', [ProdukController::class, 'read'])->name('produk.read');
Route::delete('/produk/hapus/{id}', [ProdukController::class, 'delete'])->name('produk.delete');

route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
route::put('/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');

route::get('/produk/tambahkan', [ProdukController::class, 'tambah'])->name('produk.tambah');
Route::post('/produk/add', [ProdukController::class, 'store'])->name('produk.add');

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