<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use \App\Models\Barang;
use \App\Models\Transaksi;
use \App\Models\Uang;
use \App\Models\Uanguser;
use Illuminate\Support\Facades\DB;

class DataTransactionController extends Controller
{
  public function history() {

    return view('buy.history', [
      'dataTransaksi' => Transaksi::orderBy('id', 'desc')->get(),
    ]);
  }
}