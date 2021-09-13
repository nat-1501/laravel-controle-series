<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Auth;


class Autenticador
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
        if (!$request->is('entrar', 'registrar') && !Auth::check()) {
            return redirect('/entrar');
        }


        return $next($request);
}

}