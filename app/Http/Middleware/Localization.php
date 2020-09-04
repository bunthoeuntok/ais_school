<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Localization
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
    	if (Auth::user()){
            if (!session('locale')){
                App::setLocale(Auth::user()->locale);
                session(['locale' =>Auth::user()->locale]);
            } else
                App::setLocale(session('locale'));
        }

        return $next($request);
    }
}
