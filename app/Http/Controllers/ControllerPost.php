<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPost extends Controller
{
    public function post(Request $request){
        return $request;
    }
}
