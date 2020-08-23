<?php

namespace App\Http\Middleware;

use Closure;

class SessionRedirectCheck
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
        $session = session('user');
        if($session!=null){
            return redirect('newPassword/'.$session->getId());
        }
        return $next($request);
    }
}
