<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class AuthKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('AUTH_KEY');

        $user_details = DB::table('users')->where('user_key',$token)->first();

        if ($user_details == null)
        {
            return response()->json(
                [
                    'message' => 'App Key Not Found'
                ]
            );
        }

        return $next($request);
    }
}
