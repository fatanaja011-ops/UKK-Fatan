<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class BarangController extends Controller
{
    //1. untuk menampilkan daftar barang
    public function index(Request $request)
    {
        $search = $request->input('search');
        $barangs = Barang::when($search, function ($query, $search) {
            return $query->where('nama_barang', 'like', '%{$search}%')
                         ->orWhere('lokasi', 'like', '%{$search}%');
        })->paginate(10);

        return view('barang.index', compact('barangs'));
    }

    //2. Untuk menampilkan form tambah barang
    public function create()
    {
        $kategoris = Kategori::all();
        return view('barang.create', compact('kategoris'));
    }

    //3. Untuk memvalidasi dan menyimpan data barang baru
    public function store(Request $request)
    {
        $lastBarang = Barang::latest()->first();
        $nextId = $lastbarang ? $lastaBarang->id + 1 : 1;
        $kodeOtomatis = 'BRG-' . str_pad($nextId, 3, 'o', STR_PAD_LEFT);

        $request->validate([
            'nama_barang' => 'required|string|unique:Barangs,nama_barang',
            'kategori_id' => 'required',
            'stok' => 'required|integer',
            'lokasi' => 'required',
            'kondisi' => 'required',
        ]);

        Barang::create([
            'kode_barang' =>$kodeOtomatis,
            'nama_barang' =>$request->nama_barang,
            'kategori_id' =>$request->kategori_id,
            'stok' =>$request->stok,
            'lokasi' =>$request->lokasi,
            'kondisi' =>$request->kondisi,
        ]);

        return redirect()->routes('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    //4. Untuk menghapus barang yang sudah ada
    public function destroy(Barang $barang)
    {
        $barang->delete();
        Return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }

    //5. Untuk menampilkan laporan barang
    public function laporan()
    {
        $barangs = Barang::with('kategori')->get();
        $totalStok = $barangs->sum('stok');
        return view('barang.laporan', compact('barangs', 'totalStok'));
    }
}
