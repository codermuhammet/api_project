<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if (!$request->token || $request->token != 'dQ9rvUyWMqU8KRFb5Ib6Ppb1ZVJRPQM3Lsc2HDJgbexgu83nKvGgy9v8no4Qd17n'){
            return response()->json([
                'status' => 'error',
                'message' => 'Token Error !'
            ]);
        }
    }
}
