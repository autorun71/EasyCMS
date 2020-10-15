<?php


namespace Pkg\EasyCms\Admin\Main\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MainServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__ . '/../Http/Routes/web.php');
        Route::prefix('admin')
//            ->middleware('web')
            ->group(__DIR__ . '/../Http/Routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'admin');

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
