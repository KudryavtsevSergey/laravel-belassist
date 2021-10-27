<?php

namespace Sun\BelAssist\Enum;

class ApiEnum extends AbstractEnum
{
    public const ORDER_STATE = 'orderstate/orderstate.cfm';

    public static function getValues(): array
    {
        return [
            self::ORDER_STATE,
        ];
    }
}
