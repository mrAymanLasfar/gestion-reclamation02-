<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

//     public function store(LoginRequest $request): RedirectResponse
// {
//     $request->authenticate();

//     $request->session()->regenerate();

//     $user = Auth::user();

//     // Check if the user is the specified admin and redirect accordingly

//     if ($user && $user->hasRole('admin')) {
//         return redirect(RouteServiceProvider::HOME2);
//     } 
//     elseif ($user && $user->hasRole('coordinateur')) {
//         return redirect(RouteServiceProvider::HOME3);
//     }
//     elseif ($user && $user->hasRole('superviseur')) {
//         return redirect(RouteServiceProvider::HOME4);
//     }
//     elseif ($user && $user->hasRole('operateur')) {
//         return redirect(RouteServiceProvider::HOME5);
//     }
//     // return $next($request);
//     else{return redirect()->intended(RouteServiceProvider::HOME);}
// }





public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    $request->session()->regenerate();

    $user = Auth::user();

    if ($user->hasRole('admin')) {
        return redirect(RouteServiceProvider::HOME2);
    } elseif ($user->hasRole('coordinateur')) {
        return redirect(RouteServiceProvider::HOME3);
    } elseif ($user->hasRole('superviseur')) {
        return redirect(RouteServiceProvider::HOME4);
    } elseif ($user->hasRole('operateur')) {
        return redirect(RouteServiceProvider::HOME5);
    } else {
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}








    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }


    


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}


