<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class OrderStateEnum extends AbstractEnum
{
    public const IN_PROCESS = 'In Process';
    public const AWAITING_PAYMENT_CONFIRMATION = 'Delayed';
    public const PAID = 'Approved';
    public const PAID_IN_PART = 'PartialApproved';
    public const PARTIALLY_CONFIRMED = 'PartialDelayed';
    public const CANCELED = 'Canceled';
    public const CANCELED_PARTIALLY = 'PartialCanceled';
    public const REJECTED = 'Declined';
    public const CLOSED_ON_EXPIRATION = 'Timeout';

    public static function getValues(): array
    {
        return [
            self::IN_PROCESS,
            self::AWAITING_PAYMENT_CONFIRMATION,
            self::PAID,
            self::PAID_IN_PART,
            self::PARTIALLY_CONFIRMED,
            self::CANCELED,
            self::CANCELED_PARTIALLY,
            self::REJECTED,
            self::CLOSED_ON_EXPIRATION,
        ];
    }
}
