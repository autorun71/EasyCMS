<?php


namespace Pkg\ExamplePackage\Providers;


use Illuminate\Support\ServiceProvider;
// add ExampleServiceProvider to
class ExampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'example');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->registerProviders();
//        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu'
        );


    }

    private function registerProviders()
    {
//        $this->app->register(EventServiceProvider::class);
    }
}
