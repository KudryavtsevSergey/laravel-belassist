<?php

namespace Sun\BelAssist\Enum;

class ResponseFormatEnum extends AbstractEnum
{
    const CSV = 1;
    const WDDX = 2;
    const XML = 3;
    const SOAP = 4;

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
