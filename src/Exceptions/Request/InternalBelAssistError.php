<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\BelAsssitFirstResponseCodeEnum;
use Sun\BelAssist\Enum\BelAssistSecondResponseCodeEnum;
use Throwable;

class InternalBelAssistError extends AbstractResponsableException
{
    public function __construct(Throwable $previous)
    {
        parent::__construct('Internal Error', 0, $previous);
    }

    protected function getFirstResponseCode(): int
    {
        return BelAsssitFirstResponseCodeEnum::INTERNAL_ERROR;
    }

    protected function getSecondResponseCode(): int
    {
        return BelAssistSecondResponseCodeEnum::UNEXPECTED_ERROR;
    }
}
