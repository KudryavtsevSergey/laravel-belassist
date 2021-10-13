<?php

namespace Sun\BelAssist\Enum;

class OperationTypeEnum extends AbstractEnum
{
    const APPROVE = '100';
    const CHARGE = '200';
    const PAYMENT_CANCEL = '300';
    const ACCRUAL = '500';

    public static function getValues(): array
    {
        return [
            self::APPROVE,
            self::CHARGE,
            self::PAYMENT_CANCEL,
            self::ACCRUAL,
        ];
    }
}
