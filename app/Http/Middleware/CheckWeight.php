<?php

namespace App\Http\Middleware;

use Closure;

class CheckWeight
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
        return $next($request);
    }

    if ($request->weight >= 50) {
      return view('welcome');
    }
}
