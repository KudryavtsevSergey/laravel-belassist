<?php

namespace Sun\BelAssist\Enum;

class FirstResponseCodeEnum extends AbstractEnum
{
    public const SUCCESS = 0;
    public const ERROR = 1;
    public const INTERNAL_ERROR = 2;
    public const MISSING_REQUIRED_PARAMETER = 3;
    public const PARAMETER_FORMAT_ERROR = 4;
    public const INVALID_PARAMETER_VALUE = 5;
    public const INAPPROPRIATE_SYSTEM_VERSION = 6;
    public const AUTHENTICATION_ERROR = 7;
    public const AUTHORIZATION_ERROR = 8;
    public const ENCRYPTION_ERROR = 9;
    public const MISSING_OBJECT = 10;
    public const DUPLICATE_OBJECT = 11;
    public const OBJECT_LOCKED = 12;
    public const PROHIBITED_OBJECT = 14;
    public const PROHIBITED_OPERATION = 15;
    public const OPERATION_TIMED_OUT = 16;
    public const LIMITS_ERROR = 17;
    public const SUSPECTED_FRAUD = 18;
    public const ACCESS_DENIED = 19;
    public const AUTHORIZATION_3D_SECURE_ERROR = 20;
    public const OPERATION_REJECTED = 21;

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
