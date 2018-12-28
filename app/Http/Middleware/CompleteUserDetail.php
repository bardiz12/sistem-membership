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
        if(!isset($request->user()->detail->alamat) || !isset($request->user()->detail->telepon)){
            $request->session()->flash('status', 'hai, '.$request->user()->name.' lengkapi terlebih dahulu profile anda!');
            return redirect("profile/edit");
        }
        return $next($request);
    }
}
