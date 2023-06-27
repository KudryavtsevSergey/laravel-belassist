<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class ResponseCodeEnum extends AbstractEnum
{
    public const OPERATION_COMPLETED_SUCCESSFULLY = 'AS000';
    public const AUTHORIZATION_REFUSAL = 'AS100';
    public const WRONG_MAP_PARAMETERS = 'AS101';
    public const INSUFFICIENT_FUNDS = 'AS102';
    public const INVALID_CARD_EXPIRATION_DATE = 'AS104';
    public const THE_LIMIT_OF_CARD_TRANSACTIONS_HAS_BEEN_EXCEEDED = 'AS105';
    public const RECEIVED_DATA_ERROR = 'AS107';
    public const SUSPECTED_FRAUD = 'AS108';
    public const OPERATION_LIMIT_EXCEEDED = 'AS109';
    public const REQUIRES_3D_SECURE_AUTHORIZATION = 'AS110';
    public const REPEAT_AUTHORIZATION = 'AS200';
    public const OPERATION_IN_PROCESS_WAIT = 'AS300';
    public const PAYMENT_WITH_THESE_PARAMETERS_DOES_NOT_EXIST = 'AS400';
    public const SYSTEM_ERROR = 'AS998';

    public static function getValues(): array
    {
        return [
            self::OPERATION_COMPLETED_SUCCESSFULLY,
            self::AUTHORIZATION_REFUSAL,
            self::WRONG_MAP_PARAMETERS,
            self::INSUFFICIENT_FUNDS,
            self::INVALID_CARD_EXPIRATION_DATE,
            self::THE_LIMIT_OF_CARD_TRANSACTIONS_HAS_BEEN_EXCEEDED,
            self::RECEIVED_DATA_ERROR,
            self::SUSPECTED_FRAUD,
            self::OPERATION_LIMIT_EXCEEDED,
            self::REQUIRES_3D_SECURE_AUTHORIZATION,
            self::REPEAT_AUTHORIZATION,
            self::OPERATION_IN_PROCESS_WAIT,
            self::PAYMENT_WITH_THESE_PARAMETERS_DOES_NOT_EXIST,
            self::SYSTEM_ERROR,
        ];
    }
}
