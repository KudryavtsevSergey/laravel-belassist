<?php

namespace Sun\BelAssist\Enum;

class ApiEnum extends AbstractEnum
{
    const ORDER_STATE = 'orderstate/orderstate.cfm';

    public static function getValues(): array
    {
        return [
            self::ORDER_STATE,
        ];
    }
}
