<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class WrongBelAssistAuthCodeException extends AbstractResponsableException
{
    public function __construct(?string $authCode)
    {
        $message = sprintf('Wrong Auth Code: %s', $authCode);
        parent::__construct($message);
    }

    protected function getFirstResponseCode(): int
    {
        return FirstResponseCodeEnum::INVALID_PARAMETER_VALUE;
    }

    protected function getSecondResponseCode(): int
    {
        return SecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION;
    }
}
