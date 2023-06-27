<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class DelayEnum extends AbstractEnum
{
    public const ONE_STAGE = 0;
    public const TWO_STAGE = 1;

    public static function getValues(): array
    {
        return [
            self::ONE_STAGE,
            self::TWO_STAGE,
        ];
    }
}
