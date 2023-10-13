<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OneTimeAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // $visitedKey = 'visited_' . $request->path();
        
        if (!auth()->user()->ibu_complete == 0) {
            return redirect()->route('user.home'); // Gantilah 'profile.edit' dengan rute pengisian data pribadi yang sesuai
        }
       
        return $next($request);
        // else if (!Session::has($visitedKey)) {
        //     // Jika pengguna belum pernah mengunjungi halaman ini sebelumnya, kita lanjutkan
        //     Session::put($visitedKey, true);
        //     return $next($request);
        // } else {
        //     // Jika pengguna sudah pernah mengunjungi halaman ini, kita bisa mengarahkan mereka ke halaman lain atau menampilkan pesan yang sesuai
        //     return redirect()->route('dashboard'); // Gantilah 'page.visited' dengan rute yang sesuai
        // }
    }
}
