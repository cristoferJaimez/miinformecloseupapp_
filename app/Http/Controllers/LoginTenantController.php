<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class LoginTenantController extends Controller
{
    public function login(Request $request ){

        $remember = $request->filled('remember');
        $db = config('database.connections.tenant.database');
        
//https://es.stackoverflow.com/questions/373919/cambiar-la-conexion-en-laravel
        //\Config::set('database.default', $db)|;

        if(Auth::attempt($request->only('email', 'password'), $remember)){
            request()->session()->regenerate();            
            
            return config('database');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
        
    }
}