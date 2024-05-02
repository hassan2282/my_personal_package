<?php

namespace Seyyed\First;

use Illuminate\Support\ServiceProvider;

class firstServiceProvider extends ServiceProvider
{
    public function register()
    {
     $this->app->bind('first');
     $this->mergeConfigFrom(__DIR__.'/config/config.php','first');
    }

    public function boot()
    {
        require __DIR__.'/routes/routes.php';

        $this->loadViewsFrom(__DIR__.'/resources/views','first');

        $this->publishes([
            __DIR__.'/config/config.php' => config_path('first.php'),
        ]);
    }
}
