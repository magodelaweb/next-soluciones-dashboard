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
    try {
      $user=User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password_060120211035),
      ]);
    } catch (\Exception $e) {
      $errorInfo=$e->errorInfo;
      $code=$errorInfo[0];
      $subCode=$errorInfo[1];
      $mensaje=$errorInfo[2];
      //dd($code,$subCode);die;
      if ($code=="23000" && $subCode==1062) {
        return back()->withErrors([
            'email' => 'Este correo ha sido registrado anteriormente.',
        ])->withInput($request->except('password_060120211035'));
      }
      return back()->withErrors([
          'email' => $mensaje,
      ])->withInput($request->except('password_060120211035'));
    }
    finally{
      if (isset($user)) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
      }
    }
    return back()->withErrors([
        'email' => 'Error de registro.',
    ])->withInput($request->except('password_060120211035'));
  }
}
