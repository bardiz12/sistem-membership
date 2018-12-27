<?php

namespace App\Http\Middleware;

use Closure;

class CompleteUserDetail
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
        if($request->user()->detail == null){
            return redirect("profile/edit");
        }
        return $next($request);
    }
}
