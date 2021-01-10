<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\CustomClass\Enums\Menu;

class DashboardController extends Controller
{
    public function index(){
      return view('dashboard',[
        "menu"=>Menu::DASHBOARD
      ]);
    }
}
