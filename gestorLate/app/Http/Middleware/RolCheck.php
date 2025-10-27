<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolCheck
{
    /**
     * Handles an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$roles
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles){

        if (!Auth::check()) {
            return redirect('login'); // Redirect to login page if not authenticated
        }

        // Check if the user has the required role(s)
      $user = Auth::user(); 

        if (is_array($roles)) {
            // Check if user has any of the given roles
            if (!in_array($user->rol, $roles)) {
                abort(403, 'Unauthorized'); // Return unauthorized if role is not found
                
            }
        } else {
            // Check if user has the specific role
            if ($user->rol != $roles) {
                abort(403, 'Unauthorized'); // Return unauthorized if role is not found
            }
        }

        return $next($request); // Allow the request to proceed if authorized
    }
        
    
}

