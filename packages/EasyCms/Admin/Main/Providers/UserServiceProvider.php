<?php

namespace Pkg\EasyCms\Admin\Main\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Routing\Router;
use Pkg\EasyCms\Admin\Main\Facades\Bouncer as BouncerFacade;
use Pkg\EasyCms\Admin\Main\Bouncer;
use Pkg\EasyCms\Admin\Main\Http\Middleware\Bouncer as BouncerMiddleware;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @param Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        include __DIR__ . '/../Http/Helpers/users.php';

        $router->aliasMiddleware('admin', BouncerMiddleware::class);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBouncer();
    }

    /**
     * Register Bouncer as a singleton.
     *
     * @return void
     */
    protected function registerBouncer()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Bouncer', BouncerFacade::class);

        $this->app->singleton('bouncer', function () {
            return new Bouncer();
        });
    }
}
