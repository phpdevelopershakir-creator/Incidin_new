<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Verify2FAMiddleware
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
        if (auth()->check() && !session('two_factor_authenticated')) {
            return redirect()->route('two-factor.index');
        }
        return $next($request);
    }
}
