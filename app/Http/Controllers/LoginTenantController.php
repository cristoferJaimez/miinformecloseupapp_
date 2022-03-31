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
        
        //https://es.stackoverflow.com/questions/373919/cambiar-la-conexion-en-laravel
        \Config::set('database.default', 'tenant');

        if(Auth::attempt($request->only('email', 'password'), $remember)){
            request()->session()->regenerate(); 
            \Config::set('database.default', 'tenant');
            $tenant = DB::table('users')->select('name', 'email')->get();
            return  view('tenant/admin/home',  compact('tenant'));;
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
        
    }


}