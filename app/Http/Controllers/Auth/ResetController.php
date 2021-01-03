<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class ResetController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }
  public function reset(){
    return view('auth.forgot-password');
  }

}
