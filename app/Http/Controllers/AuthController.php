<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	if(auth()->check()){
            if(auth()->user()->role == 'admin'){
                return redirect('/');
            }else{
                return redirect('/dashboard');
            }
        }
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password'))){            
    		if(auth()->user()->role == 'admin'){
                return redirect('/');
            }else{
                return redirect('/dashboard');
            }
    	}
    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
