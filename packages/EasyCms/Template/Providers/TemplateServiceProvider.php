<?php


namespace Pkg\EasyCms\Template\Providers;


use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'tmpl');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

}
