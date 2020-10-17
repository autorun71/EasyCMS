<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Pkg\EasyCms\Admin\Main\Service\Core;

if (! function_exists('core')) {
    /**
     * @return Core
     * @throws BindingResolutionException
     */
    function core()
    {
        return app()->make(Core::class);
    }
}
