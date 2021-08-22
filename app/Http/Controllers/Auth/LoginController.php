<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VirtualUser;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest', ['except' => [
            'logout'
        ]]);
    }
    public function login(){
      return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $remember=isset($request->remember);
        $credentials = [
          'email' => $request->email,
          'password' => $request->password,
        ];   
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Error de autenticación.',
        ])->withInput($request->except('password'));
    }
    public function logout(Request $request)
    {
        //dd("llego al logout");die;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
