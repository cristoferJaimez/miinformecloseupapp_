<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TenantUsersController extends Controller
{
   

    public function viewUsersTenant(){
    
        $users =   DB::table('users')->select(['id', 'name', 'email'])->get();
        //return $tenants;
        return  view('layout/usersclients',  compact('users'));
    }
}
