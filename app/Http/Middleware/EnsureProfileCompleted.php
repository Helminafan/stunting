<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureProfileCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user()->ibu_complete == 1) {
            return redirect()->route('create_ibu'); // Gantilah 'profile.edit' dengan rute pengisian data pribadi yang sesuai
        }
        if (!auth()->user()->ayah_complete == 1) {
            return redirect()->route('create_ayah'); // Gantilah 'profile.edit' dengan rute pengisian data pribadi yang sesuai
        }
        return $next($request);
    }
}
