<?php

namespace Sun\BelAssist;

use Illuminate\Support\ServiceProvider;

class BelAssistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/belassist.php' => config_path('belassist.php')
        ], 'belassist-config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/belassist.php', 'belassist');

        $this->app->singleton(Facade::FACADE, BelAssist::class);
    }
}
