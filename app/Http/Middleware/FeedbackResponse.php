<?php

namespace App\Http\Middleware;

use Closure;

class FeedbackResponse
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
        if ($request->responden !== 'operator') {
            return $next($request);
        }

        if (session()->has('_operator')) {
            if (session('_operator') instanceof \App\Operator) {
                return $next($request);
            }
        }

        $request->flash();

        return redirect()->route('operator.signin');
                // ->with('redirect', $request->fullUrl());
                // ->withInput();
    }
}
