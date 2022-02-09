<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon; // Include Class in COntroller

class date
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //auth()->user()->birth_date = "2000-10-25";
       $age = Carbon::parse(auth()->user()->birth_date)->diff(Carbon::now())->y;
        if($age>30){
        return $next($request);
        }
        else{
            return redirect()->route('dashboard');
            
        }
    }
}
