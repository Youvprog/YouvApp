<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
   {
       if(Auth::user()->hasRole('employe')){
            return view('employedash');
       }elseif(Auth::user()->hasRole('comptable')){
            return view('entreprisedash');
       }elseif(Auth::user()->hasRole('administrateur')){
        return view('Admin.dashboard');
      }
    }
}
