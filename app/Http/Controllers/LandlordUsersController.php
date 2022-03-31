<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class LandlordUsersController extends Controller
{
    //show view user list 
    public function showUsers(){

       // $tenants = DB::table('tenants')->select(['id', 'name', 'domain', 'database', 'created_at'])->get(['name']);
        $tenants = DB::table('tenants')
        ->join('users', 'users.id', '=', 'tenants.fk_user')
        ->join('users_rol', 'users_rol.id', '=', 'users.fk_rol')
        ->select('users.email', 'tenants.*', 'users_rol.description')
        ->get();
        return  view('layout/userslist',  compact('tenants'));
    }
}