<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CheckMultiplePermissions
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$gates): Response
    {

        foreach ($gates as $gate) {
            if (Gate::allows($gate)) {
                return $next($request);
            }
        }
        throw new AuthorizationException('You are not authorized with the required permission.');
    }
}


//        if(Gate::allows($gates) || Gate::allows('supervisor-permission') ){
//
//            return $next($request);
//        }else {
//            throw new AuthorizationException('You are not authorized with the required permission.');
//        }

//    }
//}
