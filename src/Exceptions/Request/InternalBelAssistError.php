<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;
use Throwable;

class InternalBelAssistError extends AbstractResponsableException
{
    public function __construct(Throwable $previous)
    {
        parent::__construct('Internal Error', $previous);
    }

    protected function getFirstResponseCode(): int
    {
        return FirstResponseCodeEnum::INTERNAL_ERROR;
    }

    protected function getSecondResponseCode(): int
    {
        return SecondResponseCodeEnum::UNEXPECTED_ERROR;
    }
}
