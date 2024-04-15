<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCliente
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role != 'cliente') {
            return redirect('/login');
        }

        return $next($request);
    }
}
