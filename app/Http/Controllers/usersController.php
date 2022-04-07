<?php

namespace App\Http\Controllers;

use App\Models\Users;

class usersController extends Controller
{
  
    protected $users;

    public function __construct(Users $users){
        $this->users = $users;
    }
    
    public function index()
    {
    $users = $this->users->userAll();
    return view('layout.post', ['users' => $users]);
    }    
    
}