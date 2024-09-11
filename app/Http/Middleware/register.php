<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class register
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }




    public function handle(Request $request, Closure $next): Response
    {
        if(!Session::has('user_id') || Session::has('user_id')==null || !Session::has('role_identity')){
            // dd('not ok');
            return redirect('logout');
        }else{
            $user = User::findOrFail(CurrentUserId());
            if(!$user){
                return redirect('logout');
            }elseif(CurrentUser() != 'super_admin'){
                return redirect('logout')->with('error','Access Denied.');
            }else{
                // dd('ok');
                return $next($request);
            }
        }
        return redirect()->route('logout');
    }
}

