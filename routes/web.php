<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Tenant;
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



Route::get('/', function () {
    $tenant =   dd(\App\Models\Tenant::all(['name']));
    return view('/tenant/welcome', ['tenant' => $tenant] );
});
