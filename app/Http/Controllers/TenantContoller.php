<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TenantContoller extends Controller
{
   
    //landloard

   

    public function view_(){
        return  view('welcome');
    }

    public function view(Request $request){
       /*  $tenant = DB::table('tenants')
        ->where('id', $request->id)
        ->first();
        */
        return  view('tenant/welcome');
    }


    // tenant

    public function savetenant(Request $request){
        return $request;
    }

  

    //tenant table
    public function table(){
        $sql = 'SELECT * FROM users';
        $products = DB::select($sql);
        return  $products;
    }
}
