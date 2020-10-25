<?php

namespace Sun\BelAssist\Enum;

class BelAssistResponseCodeEnum extends AbstractEnum
{
    const OPERATION_COMPLETED_SUCCESSFULLY = 'AS000';
    const AUTHORIZATION_REFUSAL = 'AS100';
    const WRONG_MAP_PARAMETERS = 'AS101';
    const INSUFFICIENT_FUNDS = 'AS102';
    const INVALID_CARD_EXPIRATION_DATE = 'AS104';
    const THE_LIMIT_OF_CARD_TRANSACTIONS_HAS_BEEN_EXCEEDED = 'AS105';
    const RECEIVED_DATA_ERROR = 'AS107';
    const SUSPECTED_FRAUD = 'AS108';
    const OPERATION_LIMIT_EXCEEDED = 'AS109';
    const REQUIRES_3D_SECURE_AUTHORIZATION = 'AS110';
    const REPEAT_AUTHORIZATION = 'AS200';
    const OPERATION_IN_PROCESS_WAIT = 'AS300';
    const PAYMENT_WITH_THESE_PARAMETERS_DOES_NOT_EXIST = 'AS400';
    const SYSTEM_ERROR = 'AS998';

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
