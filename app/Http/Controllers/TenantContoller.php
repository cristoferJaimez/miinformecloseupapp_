<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TenantContoller extends Controller
{
   
    //landloard

    public function view_home(){
        //return $tenants;
        return  view('landlord/admin/home');
    }

    public function view_(){
        // $tenants =   DB::table('tenants')->select(['id', 'name', 'domain', 'database'])->get(['name']);
        //return $tenants;
        $tenants = "";
        return  view('/welcome',  compact('tenants'));
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

    public function view_home_tenant(){
        //return $tenants;
        return  view('tenant/admin/home' );
    }

    //tenant table
    public function table(){
        $sql = 'SELECT * FROM users';
        $products = DB::select($sql);
        return $products;
    }
}
