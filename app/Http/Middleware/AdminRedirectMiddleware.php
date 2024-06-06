<?php




namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class AdminRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user is authenticated and has the 'admin' role
        if ($user && $user->hasRole('admin')) {
            return redirect(RouteServiceProvider::HOME2);
        }

        return $next($request);
    }
}







// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
// use App\Providers\RouteServiceProvider;

// class AdminRedirectMiddleware
// {
//     public function handle(Request $request, Closure $next)
//     {
//         $user = Auth::user();

//         Log::info('AdminRedirectMiddleware: User checked', ['user' => $user]);

//         if ($user && $user->hasRole('admin')) {
//             Log::info('AdminRedirectMiddleware: Admin user detected', ['user' => $user]);

//             // Ensure we do not redirect to the same path to avoid loop
//             if ($request->path() !== 'dashboardadmin') {
//                 Log::info('AdminRedirectMiddleware: Redirecting to admin dashboard');
//                 return redirect()->route('dashboardadmin');
//             }
//         }

//         return $next($request);
//     }
// }
















// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Log;
// use App\Providers\RouteServiceProvider;

// class AdminRedirectMiddleware
// {
//     public function handle(Request $request, Closure $next)
//     {
//         $user = Auth::user();
        
//         Log::info('AdminRedirectMiddleware: User checked', ['user' => $user]);

//         if ($user && $user->roles('admin')) {
//             Log::info('AdminRedirectMiddleware: Admin user detected', ['user' => $user]);

//             if ($request->path() !== RouteServiceProvider::HOME2) {
//                 Log::info('AdminRedirectMiddleware: Redirecting to admin dashboard');
//                 return redirect(RouteServiceProvider::HOME2);
//             }
//         }

//         return $next($request);
//     }
// }









// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use App\Providers\RouteServiceProvider;

// class AdminRedirectMiddleware
// {
//     public function handle(Request $request, Closure $next)
//     {
//         $user = Auth::user();

//         // Check if the user is authenticated and has the specified admin credentials
//         // if ($user && $user->name === 'admin4' && $user->email === 'admin4@gmail.com' && $request->password === 'admin4@gmail.com') {
//         //     return redirect(RouteServiceProvider::HOME2);
//         // }
//         if ($user && $user->roles('admin')) {
//             return redirect(RouteServiceProvider::HOME2);
//         }

//         return $next($request);
//     }
// }
