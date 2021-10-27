<?php

namespace Sun\BelAssist\Enum;

class BelAssistCurrencyEnum extends AbstractEnum
{
    public const RUB = 'RUB';
    public const USD = 'USD';
    public const EUR = 'EUR';
    public const BYN = 'BYN';

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
