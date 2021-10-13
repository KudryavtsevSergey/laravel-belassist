<?php

namespace Sun\BelAssist\Enum;

class CurrencyEnum extends AbstractEnum
{
    const RUB = 'RUB';
    const USD = 'USD';
    const EUR = 'EUR';
    const BYN = 'BYN';

    public static function getValues(): array
    {
        return [
            self::RUB,
            self::USD,
            self::EUR,
            self::BYN,
        ];
    }
}
