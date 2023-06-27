<?php

declare(strict_types=1);

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class WrongBelAssistCheckValueException extends AbstractResponsableException
{
    public function __construct(?string $checkValue)
    {
        $message = sprintf('Wrong Check Value: %s', $checkValue);
        parent::__construct($message);
    }

    protected function getFirstResponseCode(): int
    {
        return FirstResponseCodeEnum::AUTHENTICATION_ERROR;
    }

    protected function getSecondResponseCode(): int
    {
        return SecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION;
    }
}
