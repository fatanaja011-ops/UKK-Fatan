<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksibarang extends Model
{
    protected $guarded = ['id'];

    public function barang()
    {
        return $this->belongsTo(BarangController::class);
    }
}
