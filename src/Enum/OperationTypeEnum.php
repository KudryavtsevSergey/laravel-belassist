<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class OperationTypeEnum extends AbstractEnum
{
    public const APPROVE = '100';
    public const CHARGE = '200';
    public const PAYMENT_CANCEL = '300';
    public const ACCRUAL = '500';

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
