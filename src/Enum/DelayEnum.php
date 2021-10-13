<?php

namespace Sun\BelAssist\Enum;

class DelayEnum extends AbstractEnum
{
    const ONE_STAGE = 1;
    const TWO_STAGE = 2;

    public static function getValues(): array
    {
        return [
            self::ONE_STAGE,
            self::TWO_STAGE,
        ];
    }
}
