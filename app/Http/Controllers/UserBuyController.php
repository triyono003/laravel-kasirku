<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use \App\Models\Barang;
use \App\Models\Transaksi;
use \App\Models\Uang;
use \App\Models\Uanguser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class UserBuyController extends Controller
{
  public function create(Barang $barang) {
    $uang = Uang::orderBy('id', 'desc')->get();
    return view('buy.confirmation', [
      "barang" => $barang,
      "uang" => $uang,
    ]);
  }
  public function store(Request $request, Barang $barang) {
    $uangAdminModel = Uang::first();
    $uangAdmin = $uangAdminModel->uang;

    $inputUser = $request->input('userinput');
    $inputAdmin = $request->input('admininput');

    $tambah = $uangAdmin + $inputUser;
    $total = $tambah - $inputAdmin;
    $uanguser = Uanguser::create([
      'uangadmin' => $uangAdmin,
      'userinput' => $inputUser,
      'admininput' => $inputAdmin,
      'total' => $total,
    ]);
    $uangAdminModel->update(['uang' => $total]);

    $user = Auth()->user()->name;

    $cek = Transaksi::create([
      'name' => $user,
      'kode_barang' => $barang->kode_barang,
      'nama_barang' => $barang->nama_barang,
      'harga_barang' => $barang->harga_barang,
      'detail_barang' => $barang->detail_barang,
      'dibayar' => $uanguser->userinput,
      'waktu_transaksi' => $uanguser->created_at,
    ]);
    return back();
  }

}