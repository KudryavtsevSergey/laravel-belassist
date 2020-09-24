<?php

namespace Sun\BelAssist;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    const FACADE = 'BelAssist';

    protected static function getFacadeAccessor()
    {
        return self::FACADE;
    }
}
