<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belonsTo(KategoriController::class);
    }

    public function transaksiBarangs()
    {
        return $this->hasMany(TransaksiBarangController::class);
    }
}
