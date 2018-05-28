<?php

namespace App\Http\Middleware;

use Closure;

class CheckHeight
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

    if ($request->height >= 170) {
      return view('welcome');
    }

}
