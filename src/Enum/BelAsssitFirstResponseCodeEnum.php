<?php

namespace Sun\BelAssist\Enum;

class BelAsssitFirstResponseCodeEnum extends AbstractEnum
{
    const SUCCESS = 0;
    const ERROR = 1;
    const INTERNAL_ERROR = 2;
    const MISSING_REQUIRED_PARAMETER = 3;
    const PARAMETER_FORMAT_ERROR = 4;
    const INVALID_PARAMETER_VALUE = 5;
    const INAPPROPRIATE_SYSTEM_VERSION = 6;
    const AUTHENTICATION_ERROR = 7;
    const AUTHORIZATION_ERROR = 8;
    const ENCRYPTION_ERROR = 9;
    const MISSING_OBJECT = 10;
    const DUPLICATE_OBJECT = 11;
    const OBJECT_LOCKED = 12;
    const PROHIBITED_OBJECT = 14;
    const PROHIBITED_OPERATION = 15;
    const OPERATION_TIMED_OUT = 16;
    const LIMITS_ERROR = 17;
    const SUSPECTED_FRAUD = 18;
    const ACCESS_DENIED = 19;
    const AUTHORIZATION_3D_SECURE_ERROR = 20;
    const OPERATION_REJECTED = 21;

    public static function getValues(): array
    {
        return [
            self::SUCCESS,
            self::ERROR,
            self::INTERNAL_ERROR,
            self::MISSING_REQUIRED_PARAMETER,
            self::PARAMETER_FORMAT_ERROR,
            self::INVALID_PARAMETER_VALUE,
            self::INAPPROPRIATE_SYSTEM_VERSION,
            self::AUTHENTICATION_ERROR,
            self::AUTHORIZATION_ERROR,
            self::ENCRYPTION_ERROR,
            self::MISSING_OBJECT,
            self::DUPLICATE_OBJECT,
            self::OBJECT_LOCKED,
            self::PROHIBITED_OBJECT,
            self::PROHIBITED_OPERATION,
            self::OPERATION_TIMED_OUT,
            self::LIMITS_ERROR,
            self::SUSPECTED_FRAUD,
            self::ACCESS_DENIED,
            self::AUTHORIZATION_3D_SECURE_ERROR,
            self::OPERATION_REJECTED,
        ];
    }
}
