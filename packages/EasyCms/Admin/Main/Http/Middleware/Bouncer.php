<?php

namespace Pkg\EasyCms\Admin\Main\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Bouncer
{
    /**
    * Handle an incoming request.
    *
    * @param  Request  $request
    * @param Closure $next
    * @param  string|null  $guard
    * @return mixed
    */
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (! Auth::guard($guard)->check() || Auth::guard($guard)->user()->role->permission_type == 'user') {
            return redirect()->route('admin.login');
        }

        $this->checkIfAuthorized($request);

        return $next($request);
    }

    /**
    * Handle an incoming request.
    *
    * @param  Request  $request
    * @return mixed
    */
    public function checkIfAuthorized($request)
    {

        if (! $role = auth()->guard('web')->user()->role) {
            abort(401, 'This action is unauthorized.');
        }

        if ($role->permission_type == 'all') {
            return;
        } else {
            $acl = app('acl');
            if ($acl && isset($acl->roles[Route::currentRouteName()])) {
                bouncer()->allow($acl->roles[Route::currentRouteName()]);
            }
        }
    }
}
