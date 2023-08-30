<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Uang;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function home() {
    return view('home');
  }
  public function dashboard() {
    return view('dashboard.home');
  }
  public function show() {
    return view('home', [
      'barang' => Barang::orderBy('id', 'desc')->get(),
      'uang' => Uang::orderBy('id', 'desc')->get(),
    ]);
  }
}