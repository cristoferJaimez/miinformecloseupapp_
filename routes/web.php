<?php

use App\Http\Controllers\usersController;
use App\Http\Controllers\TenantContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControllerPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//view routs

    
    Route::view('login', 'auth.login')->name('login')->middleware('guest');
    Route::view('register', 'auth.register')->name('register')->middleware('auth');
    Route::view('registrationrequest', 'auth.registrationrequest')->name('registrationrequest');
   //listado de clientes
    
    //petition get
    Route::get('/',  [TenantContoller::class, 'view'] );    
   
    Route::view('home', 'auth.home')->name('home');

    //position post
    Route::post( 'login' , [LoginController::class , 'Login'])->name('login')->middleware('guest');
    Route::post( 'logout' , [LoginController::class , 'Logout'])->name('logout');
    
    
    //post url
    Route::post( 'post', [postController::class, 'post'] )->name('post')->middleware('auth');

    //list users
    Route::get('list', [usersController::class, 'index'])->name('list');