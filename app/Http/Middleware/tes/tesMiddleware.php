<?php

namespace App\Http\Middleware\tes;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class tesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(date('d')==20){
            return redirect()->route('middleware.order');
        }else{
            dd("Toko Libur");
        }
        return $next($request);
    }
}
