<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class RegisterController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }
  public function register(){
    return view('auth.register');
  }
  public function registrate(Request $request){
    $user=User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);
    if (isset($user)) {
      Auth::login($user);
      $request->session()->regenerate();
      return redirect()->intended('dashboard');
    }
    return back()->withErrors([
        'email' => 'Error de registro.',
    ]);
  }
}
