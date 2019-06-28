<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function show(){
        $user = Auth::user();

        if($user->role_id == 1){
           return view('admin')->with('user', $user);
        }else{
            return view('profile')->with('user', $user);
        }

    }
}
