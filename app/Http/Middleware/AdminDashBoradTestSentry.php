<?php

namespace App\Http\Middleware;
use App\Models\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminDashBoradTestSentry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Salam from Admin Dash Borad Test Sentry Middleware";
        $getnametestsession =  $request->session()->get('name');
        $username = User::where('id', 11)->value('name');

        if($getnametestsession === $username) {

            return $next($request);
        } else {
            return response(exit());
        }
        
    }
}
