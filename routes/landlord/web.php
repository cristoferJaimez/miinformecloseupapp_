<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TenantContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandlordUsersController;


    Route::get('/',  [TenantContoller::class, 'view_'] );
    
    Route::view('register', 'auth.register')->name('register')->middleware('auth');
    Route::post('register', [RegisterController::class, 'register'])->name('contollerRegister')->middleware('auth');

    //routes view dasboard asadmin
    Route::view('registrationrequest', 'auth.registrationrequest')->name('registrationrequest');
    Route::view('homeindex', 'layout.homeindex')->name('homeindex')->name('homeindex')->middleware('auth');
    Route::view('userslist', 'layout.userslist')->name('userslist')->name('userslist')->middleware('auth');
    Route::post('userslist', [LandlordUsersController::class, 'showUsers'])->name('userslist')->name('userslist')->middleware('auth');



    Route::view('registrationrequest', 'auth.registrationrequest')->name('registrationrequest');


    Route::view('login', 'auth.login')->name('login')->middleware('guest');
    
    Route::view('domains', 'layout.domains')->name('domains')->middleware('auth');


    //landlord
    Route::get('home', [TenantContoller::class, 'view_home'])->name('home')->middleware('auth');;


    //position post
    Route::post( 'login' , [LoginController::class , 'Login']);
    Route::post( 'logout' , [LoginController::class , 'Logout'])->name('logout');


    //tenant register
  
