<?php

declare(strict_types=1);

namespace Sun\BelAssist;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\BelAssist\Service\BelAssistApiService;

/**
 * @method static BelAssistApiService apiService()
 * @method static void loadKeysFrom(string|null $path)
 * @method static void ignoreRoutes()
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'BelAssist';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
