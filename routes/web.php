<?php

use App\Http\Controllers\TenantContoller;
use App\Http\Controllers\TenantUsersController;
use Illuminate\Support\Facades\Route;
use \App\Models\Tenant;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\LoginTenantController;


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
    Route::view('usersclients', 'layout.usersclients')->name('usersclients');
    Route::post('usersclients', [TenantUsersController::class, 'viewUsersTenant'])->name('usersclients')->middleware('auth');
    
    //petition get
    Route::get('/',  [TenantContoller::class, 'view'] );    
    //tenant
    Route::get('home', [TenantContoller::class, 'view_home_tenant', TenantUsersController::class, ' viewUsersTenant'])->middleware('auth');;
    //post
    //position post
    Route::post( 'login' , [LoginTenantController::class , 'Login'])->middleware('guest');
    Route::post( 'logout' , [LoginController::class , 'Logout'])->name('logout');
    
    //post url
    Route::post( 'post', [ControllerPost::class, 'post'] )->name('post')->middleware('auth');


