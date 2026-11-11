<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\TransaksiBarang;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarangs = Barang::count();
        $totalKategoris = Kategori::count();
        $totalTransaksis = TransaksiBarang::count();
        return view('dashboard', compact('totalBarangs', 'totalKategoris', 'totalTransaksis'));
    }
}
