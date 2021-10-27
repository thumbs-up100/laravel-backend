<?php

namespace App\Http\Middleware\Admin;

use App\Models\Admin\Menu;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Authorization
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string
     * @return mixed
     */
    public function handle($request, Closure $next, $guard)
    {
        $user = Auth::guard($guard)->user();
        if (!$user) return redirect()->guest(route('admin::login'));

//        $route = Route::currentRouteName();
        $route = $request->route()->getName();
        $permission = Menu::where('route', $route)->first();
        if (!in_array($user->id, config('light.superAdmin')) && (!$permission || !$user->can($permission->name))) {
            if ($request->expectsJson()) {
                return response()->json(['code' => 401, 'msg' => "未授权操作（路由别名：{$route}）"], 401);
            }
            abort(401, "未授权操作（路由别名：{$route}）");
        }
        return $next($request);
    }
}
