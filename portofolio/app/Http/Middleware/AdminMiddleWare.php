<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illminate\Support\Facades\Auth;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()->role == '1'){ //1=Admin & 0=User
                return $next($request);
            }
            else{
                return redirect('/')->with('status', 'Access Denied! As you are not an Admin');
            }
        }
        else{
            return redirect('/login')->with('status', 'Please Login First');
        }
    }
    }

