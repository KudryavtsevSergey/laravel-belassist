<?php

declare(strict_types=1);

namespace Sun\BelAssist;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sun\BelAssist\Service\CheckValue\CheckValueService;
use Sun\BelAssist\Service\CheckValue\CheckValueServiceInterface;
use Sun\BelAssist\Service\Signature\SignatureService;
use Sun\BelAssist\Service\Signature\SignatureServiceInterface;

class BelAssistServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerPublishing();
        $this->registerCommands();
    }

    protected function registerRoutes(): void
    {
        if (BelAssist::$registersRoutes) {
            Route::group([
                'prefix' => config('belassist.path', 'belassist'),
            ], function (): void {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
        }
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

        $this->app->singleton(SignatureServiceInterface::class, SignatureService::class);
        $this->app->singleton(CheckValueServiceInterface::class, CheckValueService::class);
    }
}
