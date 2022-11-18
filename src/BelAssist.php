<?php

namespace Sun\BelAssist;

use Sun\BelAssist\Dto\ResponseDto\BelAssistPaymentDto;
use Sun\BelAssist\Http\Controllers\BelAssistPaymentController;
use Sun\BelAssist\Service\BelAssistApiService;

class BelAssist
{
    public static ?string $keyPath = null;
    public static bool $registersRoutes = true;

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

    public static function ignoreRoutes(): void
    {
        static::$registersRoutes = false;
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
}
