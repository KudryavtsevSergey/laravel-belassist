<?php

namespace Sun\BelAssist\Enum;

use Sun\BelAssist\Exceptions\InvalidValueException;

abstract class AbstractEnum
{
    public static function checkAllowedValue(mixed $value, bool $isAllowNull = false): void
    {
        $isAllow = $isAllowNull && is_null($value);
        if (!$isAllow && !static::isContainValue($value)) {
            throw self::invalidValue($value);
        }
    }

    public static function invalidValue(mixed $value): InvalidValueException
    {
        return new InvalidValueException($value, static::getValues());
    }

    public static function isContainValue(mixed $value): bool
    {
        return in_array($value, static::getValues(), true);
    }

    abstract public static function getValues(): array;
}
