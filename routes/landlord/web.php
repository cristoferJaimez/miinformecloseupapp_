<?php
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Route::view('/', 'welcome')->name('welcome');
    
    Route::view('register', 'auth.register')->name('register');
    
    Route::view('login', 'auth.login')->name('login')->middleware('guest');
    

    //landlord
    Route::view('home', 'landlord.admin.home')->name('home')->middleware('auth');;


    //position post
    Route::post( '/login' ,function(){
        $credenciales = request()->only('email', 'password');
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();            
            return redirect('home');
        }else{
            return redirect('login');
        }
    });


    Route::post('/', fn(Request  $request) => Tenant::create($request->only('name','domain') ));


    //tenant