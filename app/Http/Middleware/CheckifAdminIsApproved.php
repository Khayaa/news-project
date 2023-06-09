<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckifAdminIsApproved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::guard('admin')->user()->is_approved == 0){
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with(session()->flash('error', 'Account needs Approval First.') );
            }
        }
        return $next($request);
    }
}
