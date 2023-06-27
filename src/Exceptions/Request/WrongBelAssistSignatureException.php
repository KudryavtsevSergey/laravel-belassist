<?php

declare(strict_types=1);

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class WrongBelAssistSignatureException extends AbstractResponsableException
{
    public function __construct(?string $signature)
    {
        $message = sprintf('Wrong Signature: %s', $signature);
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
