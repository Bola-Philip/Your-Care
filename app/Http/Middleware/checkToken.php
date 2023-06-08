<?php

namespace App\Http\Middleware;

use Closure;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
class checkToken
{    use GeneralTrait;

    public function handle($request, Closure $next, $guard = null)
    {
        // try {
        //     $user = JWTAuth::parseToken()->authenticate();
        // } catch (\Exception $e) {
        //     if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
        //         return response()->json(['status' => 'Token is Invalid']);
        //     } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
        //         return response()->json(['status' => 'Token is Expired']);
        //     } else {
        //         return response()->json(['status' => 'Authorization Token not found']);
        //     }
        // }
        if($guard != null){
            auth()->shouldUse($guard); //shoud you user guard / table
            $token = $request->header('token');
            $request->headers->set('token', (string) $token, true);
            $request->headers->set('Authorization', 'JWT Bearer '.$token, true);
            try {
              //  $user = $this->auth->authenticate($request);  //check authenticted user
                $user = JWTAuth::parseToken()->authenticate();
            } catch (TokenExpiredException $e) {
                return  $this -> returnError('401','Unauthenticated');
            } catch (JWTException $e) {

                return  $this -> returnError('', 'Token Invalid'.$e->getMessage());
            }

        }

        return $next($request);
    }
}
