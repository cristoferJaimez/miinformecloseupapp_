<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TenantContoller;
use Illuminate\Support\Facades\Route;


    Route::get('/',  [TenantContoller::class, 'view_'] );
    
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('contollerRegister');


    Route::view('login', 'auth.login')->name('login')->middleware('guest');
    

    //landlord
    Route::get('home', [TenantContoller::class, 'view_home'])->name('home')->middleware('auth');;


    //position post
    Route::post( 'login' , [LoginController::class , 'Login']);
    Route::post( 'logout' , [LoginController::class , 'Logout'])->name('logout');


    //tenant register
    Route::post('')->name('tenantsave');
