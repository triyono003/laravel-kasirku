<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterationController extends Controller
{
  public function create() {
    return view('auth.register');
  }

  public function store(Request $request) {
    $request->validate([
      'username' => ['required', 'unique:users', 'alpha_num', 'min:3', 'max:25'],
      'name' => ['required', 'string', 'min:3'],
      'password' => ['required', 'min:4'],
    ]);
    User::create([
      'username' => $request->username,
      'name' => $request->name,
      'password' => Hash::make($request->password),
    ]);
    return redirect(RouteServiceProvider::HOME);
  }
}