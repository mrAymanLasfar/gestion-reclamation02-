<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoordinateurMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->name === 'coordinateur4' && $user->email === 'coordinateur4@gmail.com' && $request->password === 'coordinateur4@gmail.com') {
            return redirect()->route('dashboardcoordinateur');
        }
        elseif ($user && $user->email === 'coordinateur4@gmail.com' && $request->password === 'coordinateur4@gmail.com') {
            return redirect()->route('dashboardcoordinateur');
        }

        return $next($request);
    }
}
