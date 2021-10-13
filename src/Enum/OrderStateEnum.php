<?php

namespace Sun\BelAssist\Enum;

class OrderStateEnum extends AbstractEnum
{
    const IN_PROCESS = 'In Process';
    const AWAITING_PAYMENT_CONFIRMATION = 'Delayed';
    const PAID = 'Approved';
    const PAID_IN_PART = 'PartialApproved';
    const PARTIALLY_CONFIRMED = 'PartialDelayed';
    const CANCELED = 'Canceled';
    const CANCELED_PARTIALLY = 'PartialCanceled';
    const REJECTED = 'Declined';
    const CLOSED_ON_EXPIRATION = 'Timeout';

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
