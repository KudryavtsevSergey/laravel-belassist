<?php

namespace Sun\BelAssist;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use Sun\BelAssist\Dto\RequestDto\BelAssistPaymentDto;

/**
 * @method static string paymentLink(BelAssistPaymentDto $belAssistPaymentDto)
 */
class Facade extends IlluminateFacade
{
    public const FACADE_ACCESSOR = 'BelAssist';

    protected static function getFacadeAccessor(): string
    {
        return self::FACADE_ACCESSOR;
    }
}
