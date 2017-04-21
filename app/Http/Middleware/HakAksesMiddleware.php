<?php

namespace App\Http\Middleware;

use Closure;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$ruleName)
    {

        if(auth()->check() && !auth()->user()->punyaRule($ruleName))
        {
          return redirect ('/');
        }


        return $next($request);
    }
}
