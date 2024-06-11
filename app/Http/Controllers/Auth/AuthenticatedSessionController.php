<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use App\Http\Requests\Auth\LoginRequest;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\View\View;

// class AuthenticatedSessionController extends Controller
// {
//     /**
//      * Display the login view.
//      */
//     public function create(): View
//     {
//         return view('auth.login');
//     }

//     /**
//      * Handle an incoming authentication request.
//      */

//     public function store(LoginRequest $request): RedirectResponse
// {
//     $request->authenticate();

//     $request->session()->regenerate();

//     $user = Auth::user();

//     // Check if the user is the specified admin and redirect accordingly
//     if ($user->name === 'admin4' && $user->email === 'admin4@gmail.com' && $request->password === 'admin4@gmail.com') {
//         return redirect()->intended(RouteServiceProvider::HOME2);
//     }
    

//     return redirect()->intended(RouteServiceProvider::HOME);
// }




//     // public function store(LoginRequest $request): RedirectResponse
//     // {
//     //     $request->authenticate();

//     //     $request->session()->regenerate();

//     //     return redirect()->intended(RouteServiceProvider::HOME);
//     // }


    


//     /**
//      * Destroy an authenticated session.
//      */
//     public function destroy(Request $request): RedirectResponse
//     {
//         Auth::guard('web')->logout();

//         $request->session()->invalidate();

//         $request->session()->regenerateToken();

//         return redirect('/');
//     }
// }







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
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();

        if ($user) {
            if ($user->hasRole('admin')) {
                return redirect()->intended(RouteServiceProvider::HOME2);
            }
            if ($user->hasRole('coordinateur')) {
                return redirect()->intended(RouteServiceProvider::HOME3);
            }
            if ($user->hasRole('superviseur')) {
                return redirect()->intended(RouteServiceProvider::HOME4);
            }
            if ($user->hasRole('operateur')) {
                return redirect()->intended(RouteServiceProvider::HOME5);
            }
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
