<?php


namespace Pkg\EasyCms\Site\Home\Providers;


use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'site');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->registerProviders();
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

    }

    private function registerProviders()
    {
    }
}
