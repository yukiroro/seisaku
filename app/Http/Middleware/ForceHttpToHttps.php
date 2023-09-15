<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceHttpToHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (\App::environment(['production']) && $_SERVER["HTTP_X_FORWARDED_PROTO"] != 'https') {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
