<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Password;

class ResetController extends Controller
{ //4h
  public function __construct()
  {
    $this->middleware('guest');
  }
  public function request(){
    return view('auth.forgot-password');
  }
  public function email(Request $request){
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)])->withInput();
  }
  public function reset($token){
    return view('auth.reset-password', ['token' => $token]);
  }
  public function update(Request $request){
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) use ($request) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();
            $user->setRememberToken(Str::random(60));
            event(new PasswordReset($user));
        }
    );
    return $status == Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]])->withInput();
  }
}
