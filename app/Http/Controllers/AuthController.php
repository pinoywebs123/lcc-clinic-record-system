<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    
    public function login(){
    	return view('welcome');
    }

    public function login_check(Request $request){
    	if(Auth::attempt($request->only('username','password'))){
    		return redirect()->route('admin_home');
    	}else{
    		return redirect()->back()->with('err','Invalid Username/Password');
    	}
    }
}
