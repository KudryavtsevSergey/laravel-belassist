<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class WrongBelAssistMerchantIdException extends AbstractResponsableException
{
    public function __construct(?string $merchantId)
    {
        $message = sprintf('Wrong Merchant Id: %s', $merchantId);
        parent::__construct($message);
    }

    protected function getFirstResponseCode(): int
    {
        return FirstResponseCodeEnum::INVALID_PARAMETER_VALUE;
    }

    protected function getSecondResponseCode(): int
    {
        return SecondResponseCodeEnum::PARAMETER_MERCHANT_ID;
    }
}
