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

    public function view(Request $request){
         $tenant = DB::table('tenants')
        ->where('id', $request->id)
        ->first();
        
        return  view('tenant/welcome',  ['tenant' => $tenant]);
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
