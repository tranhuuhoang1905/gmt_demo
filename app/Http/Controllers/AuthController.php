<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $userName =  $request['name'];
        $pass = $request['passwords'];
        if(Auth::attempt(['name'=>$userName,'password'=>$pass]))
        {
            return view('welcome');
        }else{
            return view('loginForm');
        }
    }

    public function logout(){
        Auth::logout();
        return view('getlogin');
    }

    public function index(){
        Auth::logout();
        return view('loginForm');
    }
}
