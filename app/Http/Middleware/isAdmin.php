<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class isAdmin
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
        if(!Auth::user()->isAdmin()) {
            return Redirect::back()->with([
                "errors" => 'Na vstup do tejto sekcie nemáte adekvátne prístupové práva.'
            ]);
        }else {
            return $next($request);
        }
    }
}
