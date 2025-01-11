<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function read()
    {
        $produk = Produk::all();
        return view('produk.read', compact('produk'));
    }
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.read')->with('success', 'Produk berhasil dihapus!');
    }

    public function edit(Produk $id)
    {
        return view('produk.update', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga_grosir' => 'required|numeric',
            'harga_beli' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama' => $request->nama,
            'harga_grosir' => $request->harga_grosir,
            'harga_beli' => $request->harga_beli,
        ]);

        return redirect()->route('produk.read')->with('success', 'Produk berhasil diperbarui!');
    }

    public function tambah(Produk $id)
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga_grosir' => 'required|numeric',
            'harga_beli' => 'required|numeric',
        ]);

        Produk::create([
            'nama' => $request->input('nama'),
            'harga_grosir' => $request->input('harga_grosir'),
            'harga_beli' => $request->input('harga_beli'),
        ]);

        return redirect()->route('produk.read')->with('success', 'Produk berhasil ditambahkan!');
    }



}
