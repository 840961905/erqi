<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        $uid = session('uid');
        if($uid){
            if (session('status') == 1) {
                return $next($request);                
            } else {
            session(['uid'=>'']);
            session(['pri'=>'']);
            session(['uname'=>'']);
            session(['status'=>'']);
            return back()->with('error','�˻��ѱ�����������ϵ����Ա');
            }
        } else {
            return redirect('/admin/login');
        }
    }
}
