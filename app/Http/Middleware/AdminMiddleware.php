<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->name === 'admin4' && $user->email === 'admin4@gmail.com' && $request->password === 'admin4@gmail.com') {
            return redirect()->route('dashboardadmin');
        }
        elseif ($user && $user->email === 'admin4@gmail.com' && $request->password === 'admin4@gmail.com') {
            return redirect()->route('dashboardadmin');
        }

        return $next($request);
    }
} 
