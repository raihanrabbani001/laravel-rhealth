<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifySignedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->get('role') == 'apotek') {
            return redirect()->route('keluhans.index');
        } elseif (session()->get('role') == 'pelanggan'){
            return redirect()->route('clients.index', session('uname'));
        }

        return $next($request);
    }
}
