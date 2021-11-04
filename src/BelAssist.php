<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Support\Facades\Route;
use Sun\BelAssist\Dto\ResponseDto\BelAssistPaymentDto;
use Sun\BelAssist\Http\Controllers\BelAssistPaymentController;
use Sun\BelAssist\Service\BelAssistApiService;

class BelAssist
{
    public static ?string $keyPath = null;

    public function apiService(): BelAssistApiService
    {
        return app(BelAssistApiService::class);
    }

    public function paymentLink(BelAssistPaymentDto $belAssistPaymentDto): string
    {
        return route(BelAssistPaymentController::PAY_ROUTE_NAME, $belAssistPaymentDto->toArray());
    }

    public static function loadKeysFrom($path): void
    {
        static::$keyPath = $path;
    }

    public static function publicKeyPath(): string
    {
        return self::keyPath('assist-public.key');
    }

    public static function privateKeyPath(): string
    {
        return self::keyPath('assist-private.key');
    }

    private static function keyPath($file): string
    {
        $file = ltrim($file, '/\\');

        return static::$keyPath
            ? sprintf('%s%s%s', rtrim(static::$keyPath, '/\\'), DIRECTORY_SEPARATOR, $file)
            : storage_path($file);
    }

    public function routes(array $options = []): void
    {
        $defaultOptions = ['prefix' => 'belassist', 'namespace' => '\Sun\BelAssist\Http\Controllers'];

        $options = array_merge($defaultOptions, $options);

        Route::group($options, function (Registrar $router): void {
            (new RouteRegistrar($router))->routes();
        });
    }
}
