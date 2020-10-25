<?php

namespace Sun\BelAssist\Enum;

class BelAssistLanguageEnum extends AbstractEnum
{
    const RUSSIAN = 'RU';
    const ENGLISH = 'EN';

    public static function getValues(): array
    {
        return [
            self::RUSSIAN,
            self::ENGLISH,
        ];
    }
}
