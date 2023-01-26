<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
     /**
     * handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     *
     */

     public function handle(Request $request){
        if(Auth::user()->Role === 'ADM'){
            return ($request);
        }
        return redirect('login');
     }
}
