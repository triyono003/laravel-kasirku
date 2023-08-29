<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
   public function __invoke(Request $request)
   {
     Auth::logout();
     return redirect(RouteServiceProvider::HOME);
   }
}
