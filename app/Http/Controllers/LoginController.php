<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function login(Request $request ){
        $remember = $request->filled('remember');
        
        if(Auth::attempt($request->only('email', 'password'), $remember)){
            request()->session()->regenerate();            
            return redirect()->intended('home')->with('status', 'You are logger in!');

        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }


   public function logout(Request $request ,  Redirector $redirect){
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       
       return $redirect->to('login')->with('status', "You're logger out");
   } 
}
