<?php

namespace Sun\BelAssist;

use Illuminate\Container\Container;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sun\BelAssist\Service\CheckValueService;
use Sun\BelAssist\Service\CheckValueServiceContract;
use Sun\BelAssist\Service\SignatureService;
use Sun\BelAssist\Service\SignatureServiceContract;

class BelAssistServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerResources();
        $this->registerPublishing();
        $this->registerCommands();
    }

    protected function registerRoutes(): void
    {
        if (BelAssist::$registersRoutes) {
            Route::group([
                'prefix' => config('belassist.path', 'belassist'),
                'namespace' => '\Sun\BelAssist\Http\Controllers',
            ], function (): void {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
        }
    }

    protected function registerResources(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'belassist');
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/belassist.php' => config_path('belassist.php')
            ], 'belassist-config');
        }
    }

    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\KeysCommand::class,
            ]);
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/belassist.php', 'belassist');

        $this->app->singleton(Facade::FACADE_ACCESSOR, BelAssist::class);

        $this->app->singleton(BelAssistConfig::class, static fn(
            Container $container,
        ): BelAssistConfig => new BelAssistConfig($container->make(Repository::class)));

        $this->app->singleton(SignatureServiceContract::class, SignatureService::class);
        $this->app->singleton(CheckValueServiceContract::class, CheckValueService::class);
    }
}
