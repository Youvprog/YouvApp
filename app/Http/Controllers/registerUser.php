<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\roleusers;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class registerUser extends Controller
{
    public function store(Request $request) 
    {
        $user = new User;
        $roleU = new roleusers;
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->id;
         
        $user->attachRole($request->role_id);
        $roleU->user_id = $user->id;

    }

    public function show () 
     {
      $utilis = User::all();
      return view('Admin.ListeUsers',['utilisateurs' =>$utilis]);
     }

     public function show2 ()
     {
         $test = User::all();
         return view('Admin.page',['chicks' =>$test]);
     }

     public function show3()
     {
         return view('Admin.test');
     }

}
