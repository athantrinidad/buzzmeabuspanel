<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    //
    public function showLoginForm(){
        return view('auth.admin-login');
    }
    
    //Admin Login
    public function login(Request $request){
        
        //Validate form data
        $this->validate($request,[
            'email' => 'required|email',
            'password'=> 'required'
        ]);
        //Attempt to log user in
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
           //If successful, redirect to intended location
           return redirect()->intended(route('admin.dashboard')); 
        }
            
        //If not successful, then redirect back to login form 
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
