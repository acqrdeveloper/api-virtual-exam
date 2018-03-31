<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * [Dev: Funcion que valida el acceso por una cabecera válida]
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
            ->header('Access-Control-Allow-Origin', ['*'])
            ->header('Access-Control-Allow-Methods', 'GET POST PUT DELETE OPTIONS');
    }

}
