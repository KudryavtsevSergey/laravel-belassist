<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\BelAsssitFirstResponseCodeEnum;
use Sun\BelAssist\Enum\BelAssistSecondResponseCodeEnum;

class WrongBelAssistAuthCodeException extends AbstractResponsableException
{
    public function __construct(?string $authCode)
    {
        $message = sprintf('Wrong Auth Code: %s', $authCode);
        parent::__construct($message);
    }

    protected function getFirstResponseCode(): int
    {
        return BelAsssitFirstResponseCodeEnum::INVALID_PARAMETER_VALUE;
    }

    protected function getSecondResponseCode(): int
    {
        return BelAssistSecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION;
    }
}
