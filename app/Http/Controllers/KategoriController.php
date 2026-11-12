<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //1. Untuk menampilkan daftar kategori
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    //2. Untuk menampilkan form tambah kategori
    public function create()
    {
        return view('kategori.create');
    }

    //3. Untuk memvalidasi dan menyimpan data kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:Kategoris,nama_kategori',
        ]);

        Kategori::create($request->all());

        return redirect()->routes('kategori.index')->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    //4. Untuk menampilkan form edit
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    //5. Untuk memvalidasi dan menyimpan data kategori yang sudah di ubah
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori' . $kategori->id,
        ]);

        Kategori::update($request->all());

        return redirect()->routes('kategori.index')->with('success', 'kategori berhasil diupdate!');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->routes('kategoris.index')->with('success', 'Kategori berhasil dihapus!');
    }
}
