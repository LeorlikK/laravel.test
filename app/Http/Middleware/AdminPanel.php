<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPanel
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        return $next($request);
        if (isset(auth()->user()->state)) {
            if (auth()->user()->state !== 'admin') {
                return redirect()->route('home');
            } else {
                return $next($request);
            }
        } else {
            return redirect()->route('home');
        }
    }
}