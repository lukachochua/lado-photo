<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdministrator
{
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()?->email !== 'fuzzack@gmail.com') {
            abort(HttpResponse::HTTP_FORBIDDEN);
        }
        
        return $next($request);
    }
}
