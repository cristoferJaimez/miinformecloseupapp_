<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantUsersController extends Controller
{
   
    public function viewUsersTenant(){
        $users = \DB::table('users')->select()->get();
        return  view('layout/usersclients', compact('users'));
    }
}
