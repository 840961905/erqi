<?php

namespace App\Http\Middleware;

use Closure;

class HomeLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uid = session('userid');
        if($uid){
            if (session('status') == 1) {
                return $next($request);           
            } else {
            session(['userid'=>'']);
            session(['img'=>'']);
            session(['aname'=>'']);
            session(['status'=>'']);
            session(['phone'=>'']);
            return back()->with('error','您的账号已冻结，请联系客服');
            }
        } else {
            return redirect('/home/login');
        }
    }
}
