<?php

namespace Sun\BelAssist;

use Illuminate\Support\ServiceProvider;
use League\OAuth2\Server\CryptKey;
use Sun\BelAssist\Service\CheckValueService;
use Sun\BelAssist\Service\CheckValueServiceContract;
use Sun\BelAssist\Service\SignatureService;
use Sun\BelAssist\Service\SignatureServiceContract;

class BelAssistServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'belassist');

        $this->publishes([
            __DIR__ . '/../config/belassist.php' => config_path('belassist.php')
        ], 'belassist-config');

        $config = $this->app->make(BelAssistConfig::class);
        $this->app->bind(
            SignatureServiceContract::class,
            fn(): SignatureServiceContract => new SignatureService(
                $config,
                $this->makePrivateCryptKey(),
                $this->makePublicCryptKey()
            )
        );

        $this->app->bind(
            CheckValueServiceContract::class,
            fn(): CheckValueServiceContract => new CheckValueService($config)
        );

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\KeysCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/belassist.php', 'belassist');

        $this->app->singleton(Facade::FACADE_ACCESSOR, BelAssist::class);
    }

    private function makePrivateCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey(BelAssist::privateKeyPath());
    }

    private function makePublicCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey(BelAssist::publicKeyPath());
    }

    private function makeCryptKey(string $file): ?CryptKey
    {
        $key = sprintf('file://%s', $file);
        return is_file($key) ? new CryptKey($key, keyPermissionsCheck: false) : null;
    }
}
