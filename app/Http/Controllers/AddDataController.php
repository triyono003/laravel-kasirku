<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AddDataController extends Controller
{
  public function create() {
    return view('add');
  }
  public function store(Request $request) {
    $request->validate([
      'nama_barang' => ['required', 'string', 'min:3', 'max:30'],
      'stok_barang' => ['required', 'numeric'],
      'harga_barang' => ['required', 'numeric'],
      'detail_barang' => ['required', 'string', 'min:3', 'max:30'],
    ]);

    Barang::create([
      'nama_barang' => $request->nama_barang,
      'stok_barang' => $request->stok_barang,
      'harga_barang' => $request->harga_barang,
      'detail_barang' => $request->detail_barang,
    ]);

    return redirect('/');
  }
}