<?php

namespace App\Http\Controllers;

use \App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserBuyController extends Controller
{
   public function create($id)
   {
     $barang = Barang::find($id);
     return view('buy.confirmation',["barang" => $barang]);
   }
}
