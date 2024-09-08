<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function doLogin(Request $request){
        $crediantials = $request->except('_token');

        $auth = Auth::attempt($crediantials);

        if ($auth){
            return redirect('/admin/dashboard');
        }
        return redirect('/login')->with('error', 'User of Password Invalid');

    }
    public function logOut (){
        Auth::logout();

        return redirect()->route('login');
    }
}
