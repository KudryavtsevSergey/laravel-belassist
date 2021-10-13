<?php

namespace Sun\BelAssist\Exceptions\Request;

use Sun\BelAssist\Exceptions\InternalError;
use Sun\BelAssist\ResponseGenerators\FailureResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;

abstract class AbstractResponsableException extends InternalError implements ResponsableThrowable
{
    public function toResponse($request): BelAssistResponse
    {
        $generator = new FailureResponseGenerator($this->getFirstResponseCode(), $this->getSecondResponseCode());
        return new BelAssistResponse($generator);
    }

    protected abstract function getFirstResponseCode(): int;

    protected abstract function getSecondResponseCode(): int;
}
