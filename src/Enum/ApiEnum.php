<?php

namespace Sun\BelAssist\Enum;

class ApiEnum extends AbstractEnum
{
    public const ORDER_STATE = 'orderstate/orderstate.cfm';
    public const PAY_ORDER = 'pay/order.cfm';

    public static function getValues(): array
    {
        return [
            self::ORDER_STATE,
            self::PAY_ORDER,
        ];
    }
}
