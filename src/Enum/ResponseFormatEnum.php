<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class ResponseFormatEnum extends AbstractEnum
{
    public const CSV = 1;
    public const WDDX = 2;
    public const XML = 3;
    public const SOAP = 4;

    public static function getValues(): array
    {
        return [
            self::CSV,
            self::WDDX,
            self::XML,
            self::SOAP,
        ];
    }
}
