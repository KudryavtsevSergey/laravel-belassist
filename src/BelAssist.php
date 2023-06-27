<?php

declare(strict_types=1);

namespace Sun\BelAssist;

use Sun\BelAssist\Service\BelAssistApiService;

class BelAssist
{
    public static ?string $keyPath = null;
    public static bool $registersRoutes = true;

    public function apiService(): BelAssistApiService
    {
        return app(BelAssistApiService::class);
    }

    public static function loadKeysFrom(?string $path): void
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

    private static function keyPath(string $file): string
    {
        $file = ltrim($file, '/\\');

        return static::$keyPath
            ? sprintf('%s%s%s', rtrim(static::$keyPath, '/\\'), DIRECTORY_SEPARATOR, $file)
            : storage_path($file);
    }
}
