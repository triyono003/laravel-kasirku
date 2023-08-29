<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
   public function login()
   {
     return view('auth.login');
   }
   public function store(Request $request)
   {
     $attributes = $request->validate([
       'username' => ['required'],
       'password' => ['required'],
      ]);
      if(Auth::attempt($attributes)){
        return redirect(RouteServiceProvider::HOME);
     }
      
      throw ValidationException::withMessages([
          'username' => 'username mboten ono',
       ]);
   }
}
