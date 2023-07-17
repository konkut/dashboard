<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Route;
class TwoFactor
{
    public function handle(Request $request, Closure $next): Response
    {
        if(!request()->hasCookie('doris_device_trusted')):
            return to_route('connect_two_factor');  
        endif;
    
        return $next($request);
    }
}
