<?php

namespace Sun\BelAssist\Enum;

class CardPaymentEnum extends AbstractEnum
{
    public const USE_CREDIT_CARD_PAYMENT = 1;
    public const DISABLE_CREDIT_CARD_PAYMENTS = 0;

    public static function getValues(): array
    {
        return [
            self::USE_CREDIT_CARD_PAYMENT,
            self::DISABLE_CREDIT_CARD_PAYMENTS,
        ];
    }
}
