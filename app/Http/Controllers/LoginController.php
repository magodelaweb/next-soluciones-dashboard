<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
      return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $remember=isset($request->remember);
        $credentials = [
          'email' => $request->email,
          'password' => $request->password,
          'active' => 1
        ];
        if (Auth::attempt($credentials, $remember)) {
            //dd("Autenticado");die;
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        //dd("No Autenticado");die;
        return back()->withErrors([
            'email' => 'Error de autenticación.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

// $pw="Melilove1!";
// $password=Hash::make($pw);
