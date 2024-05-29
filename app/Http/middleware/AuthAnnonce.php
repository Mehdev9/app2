<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAnnonce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $token = $request->session()->get('token');
        if (!auth()->check()) {
            return redirect()->to(route('login'))->with('info','Vous devez être connectés pour créer une annonce');
        }

        if(auth()->user()->compte !== 'bailleur') {
            return redirect()->to(route('home'));
        }
        //     else {
            //     return redirect('creation-annonce');
            // }
            
        return $next($request);
    }
}
