<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AyahAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user()->ayah_complete == 0) {
            return redirect()->route('user.home'); // Gantilah 'profile.edit' dengan rute pengisian data pribadi yang sesuai
        }
        return $next($request);
    }
}
