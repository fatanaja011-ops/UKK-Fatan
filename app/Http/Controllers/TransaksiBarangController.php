<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\TransaksiBarang;

class TransaksiBarangController extends Controller
{
    //1. Untuk menampilkan daftar transaksi
    public function index()
    {
        $transaksi = TransaskiBarang::with('barang')->get();
        return view('transaksi-barang.index', compact('transaksis'));
    }

    //2. Untuk menampilkan form tambah transaksi
    public function create()
    {
        $barangs = Barang::all();
        return view('transaksi-barang.create', compact('barangs'));
    }

    //3. Untuk memvalidasi dan menyimpnan data transaksi baru
    public function store(Request $request)
    {
        $barangs = Barang::findOrFail($request->id);

        $request->validate([
            'barang_id' => 'required',
            'jenis' => 'required|in:Masuk,Keluar',
            'jumlah' => 'required|integer|min:1',
        ]);

        if ($request->jenis == "keluar" && $barang->stok < $request->jumlah){
            return back()->withInput()->withErrors(['error', 'Stok tidak mencukupi untuk keluar!']);
        }

        TransaksiBarang::create($request->all());

        if ($request->jenis == 'Masuk') {
            return $barangs->increment('stok');
        } else {
            return $barangs->decrement('stok');
        }

        return redirect()->routes('transaksi-barang.index')->with('success', 'transaksi barus berhasil ditambahkan!');
    }

    
}
