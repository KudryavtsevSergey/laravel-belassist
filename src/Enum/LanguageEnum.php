<?php

namespace Sun\BelAssist\Enum;

class LanguageEnum extends AbstractEnum
{
    public const RUSSIAN = 'RU';
    public const ENGLISH = 'EN';

    public static function getValues(): array
    {
        return [
            self::RUSSIAN,
            self::ENGLISH,
        ];
    }
}
