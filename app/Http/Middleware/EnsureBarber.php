<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureBarber
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guard('barber')->check()) {
            return redirect()->route('barber.login');
        }

        return $next($request);
    }
}