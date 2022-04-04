<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $namedb = Request::header('namedb'); // Este es el parámetro a validar
        if(!empty($namedb)){
            \Config::set('database.connections.tenant.database',$namedb); // Asigno la DB que voy a usar
            \DB::connection('tenant'); //Asigno la nueva conexión al sistema. 
        }
        return $next($request);
    
    }
}
