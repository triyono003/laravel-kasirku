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
    $perpage = 3;
    $page = 1;
    $data = Transaksi::orderBy('id', 'desc')->paginate($perpage, ['*'], 'page', $page);
    return view('buy.history', [
      'dataTransaksi' => $data,
    ]);
  }
  public function historyPage2() {
    $perpage = 3;
    $page = 2;
    $data = Transaksi::orderBy('id', 'desc')->paginate($perpage, ['*'], 'page', $page);
    return view('buy.history', [
      'dataTransaksi' => $data,
    ]);
  }
}