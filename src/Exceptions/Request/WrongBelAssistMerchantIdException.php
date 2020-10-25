<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\BelAsssitFirstResponseCodeEnum;
use Sun\BelAssist\Enum\BelAssistSecondResponseCodeEnum;

class WrongBelAssistMerchantIdException extends AbstractResponsableException
{
    public function __construct(?string $merchantId)
    {
        $message = sprintf('Wrong Merchant Id: %s', $merchantId);
        parent::__construct($message);
    }

    protected function getFirstResponseCode(): int
    {
        return BelAsssitFirstResponseCodeEnum::INVALID_PARAMETER_VALUE;
    }

    protected function getSecondResponseCode(): int
    {
        return BelAssistSecondResponseCodeEnum::PARAMETER_MERCHANT_ID;
    }
}
