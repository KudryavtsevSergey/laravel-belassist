<?php

namespace Sun\BelAssist\Enum;

class RecurringIndicatorEnum extends AbstractEnum
{
    public const RECURRENT_PAYMENT = 1;
    public const NON_RECURRING_PAYMENT = 0;

    public static function getValues(): array
    {
        return [
            self::RECURRENT_PAYMENT,
            self::NON_RECURRING_PAYMENT,
        ];
    }
}
