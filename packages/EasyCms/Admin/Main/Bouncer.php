<?php


namespace Pkg\EasyCms\Admin\Main;


use App\Models\User;

class Bouncer
{
    /**
     * Checks if user allowed or not for certain action
     *
     * @param string $permission
     * @return bool
     */
    public function hasPermission($permission)
    {

        if (auth()->guard('web')->check() && auth()->guard('web')->user()->role->permission_type == 'all') {
            return true;
        } else {
            if (! auth()->guard('web')->check() || ! auth()->guard('web')->user()->hasPermission($permission)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Checks if user allowed or not for certain action
     *
     * @param  string  $permission
     * @return void
     */
    public static function allow($permission)
    {

        if (! auth()->guard('web')->check() || ! auth()->guard('web')->user()->hasPermission($permission)) {
            abort(401, 'This action is unauthorized');
        }
    }
}
