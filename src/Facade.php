<?php

namespace Sun\BelAssist;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'BelAssist';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
