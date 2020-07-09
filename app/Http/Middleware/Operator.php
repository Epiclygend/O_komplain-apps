<?php

namespace App\Http\Middleware;

use Closure;

class Operator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('_operator')) {
            if (session('_operator') instanceof \App\Operator) {
                return $next($request);
            }
        }

        return redirect()->route('operator.signin');
    }
}
