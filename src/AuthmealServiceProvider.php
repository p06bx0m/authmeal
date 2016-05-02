<?php

namespace Quaker\Authmeal;

use Illuminate\Support\ServiceProvider;

class AuthmealServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

        $this->loadTranslationsFrom(__DIR__.'/Lang', 'authmeal');
        $this->publishes([
            __DIR__.'/Config/authmeal.php' => config_path('authmeal.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->mergeConfigFrom(__DIR__.'/Config/authmeal.php', 'authmeal');

        $this->loadViewsFrom(__DIR__.'/Views', 'authmeal');

        $this->app['authmeal'] = $this->app->share(function($app) {
            return new Authmeal;
        });
    }
}
