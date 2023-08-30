<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'id_transaksi',
      'kode_barang',
      'nama_barang',
      'harga_barang',
      'detail_barang',
      'dibayar',
      'waktu_transaksi',
    ];
}
