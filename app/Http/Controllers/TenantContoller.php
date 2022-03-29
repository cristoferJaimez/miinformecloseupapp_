<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TenantContoller extends Controller
{
   
    //landloard

    public function view_home(){
        $tenants =   DB::table('tenants')->select(['id', 'name', 'domain', 'database', 'created_at'])->get(['name']);
        //return $tenants;
        return  view('landlord/admin/home',  compact('tenants'));
    }

    public function view_(){
        $tenants =   DB::table('tenants')->select(['id', 'name', 'domain', 'database'])->get(['name']);
        //return $tenants;
        return  view('/welcome',  compact('tenants'));
    }

    public function view(){
        $tenants =   DB::table('tenants')->select(['id', 'name', 'domain', 'database'])->get(['name']);
        return  view('tenant/welcome',  compact('tenants'));
    }


    // tenant

    public function savetenant(Request $request){
        return $request;
    }

    public function view_home_tenant(){
        $tenants =   DB::table('tenants')->select(['id', 'name', 'domain', 'database', 'created_at'])->get(['name']);
        //return $tenants;
        return  view('tenant/admin/home',  compact('tenants'));
    }

    //tenant table
    public function table(){
        $sql = 'SELECT * FROM users';
        $products = DB::select($sql);
        return $products;
    }
}
