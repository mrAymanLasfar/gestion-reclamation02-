<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;


class UserRedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */




     public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            if ($user->hasRole('admin')) {
                return redirect(RouteServiceProvider::HOME2);
            }
            if ($user->hasRole('coordinateur')) {
                return redirect(RouteServiceProvider::HOME3);
            }
            if ($user->hasRole('superviseur')) {
                return redirect(RouteServiceProvider::HOME4);
            }
            if ($user->hasRole('operateur')) {
                return redirect(RouteServiceProvider::HOME5);
            }
        }

        return $next($request);
    }






    // public function handle(Request $request, Closure $next)
    // {
    //     $user = Auth::user();
    //     $role->givePermissionTo($permission);
    //     $permission->assignRole($role);
    //     // Check if the user is authenticated and has the 'admin' role
    //     if ($user && $user->$permission('admin')) {
    //         return redirect(RouteServiceProvider::HOME2);
    //     } 
    //     if ($user && $user->hasRole('coordinateur')) {
    //         return redirect(RouteServiceProvider::HOME3);
    //     }
    //     if ($user && $user->hasRole('superviseur')) {
    //         return redirect(RouteServiceProvider::HOME4);
    //     }
    //     if ($user && $user->hasRole('operateur')) {
    //         return redirect(RouteServiceProvider::HOME5);
    //     }
    //     return $next($request);





        // if ($user && $user->hasRole('admin')) {
        //     return redirect(RouteServiceProvider::HOME2);
        // } 
        // if ($user && $user->hasRole('coordinateur')) {
        //     return redirect(RouteServiceProvider::HOME3);
        // }
        // if ($user && $user->hasRole('superviseur')) {
        //     return redirect(RouteServiceProvider::HOME4);
        // }
        // if ($user && $user->hasRole('operateur')) {
        //     return redirect(RouteServiceProvider::HOME5);
        // }
        // return $next($request);
    }




// }
