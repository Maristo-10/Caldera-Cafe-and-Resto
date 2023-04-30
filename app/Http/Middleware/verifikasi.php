<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class verifikasi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->keterangan == "Verifikasi"){ /*sdaasd*/ 
            return $next($request);
        }
        return redirect('/')->with('error', "Your Account was being validated by Admin now. Please wait until you make new Order!");
    }
}