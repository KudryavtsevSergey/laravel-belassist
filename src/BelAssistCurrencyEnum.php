<?php

namespace Sun\BelAssist;

use Sun\BelAssist\Enum\AbstractEnum;

class BelAssistCurrencyEnum extends AbstractEnum
{
    const RUB = 'RUB';
    const USD = 'USD';
    const EUR = 'EUR';
    const BYR = 'BYR';

    public static function getValues(): array
    {
        return [
            self::RUB,
            self::USD,
            self::EUR,
            self::BYR,
        ];
    }
}
