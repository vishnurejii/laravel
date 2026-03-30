<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     * 
    

     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

    if($request->age<18){
        return redirect()->route('home');
    }else{
        echo "age is equal to and greater than 18";
    
        return $next($request);
    }
    }
}
