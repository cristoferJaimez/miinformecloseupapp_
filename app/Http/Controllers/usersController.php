<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function listUsers(){
        $users = DB::table('users')->select(['name', 'email', 'id'])->get();
        return view('layout/post', ['users'=> $users]);
    }
}
