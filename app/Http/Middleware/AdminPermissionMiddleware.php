<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Admin\Admin;
use App\Model\Admin\Role;
use App\Model\Admin\Permission;
use DB;

class AdminPermissionMiddleware
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

        // 获取管理员信息
        $uid = session('uid');
        $admins = Admin::find($uid);
        // 通过管理员的信息查找角色
        $roles = $admins->roles;

        $perss = [];
        foreach ($roles as $k => $role_id) {
            $rles = $role_id->pers;

            foreach ($rles as $k => $v) {
                $perss[] = $v->url;
            }            
        }

        $urls= array_unique($perss);
        $active = \Route::current()->getActionName();
        // dump($active);
        // dump($request->path());
        // 用过角色查找权限
        if(!in_array($active, $urls)) {
            // 判断该用户有那些权限
            return redirect()->action('Admin\AdminController@remind');
        }
            return $next($request);
        
    }
}
