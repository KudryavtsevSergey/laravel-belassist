<?php

namespace Sun\BelAssist\Exceptions\Request;

use Exception;
use Illuminate\Contracts\Support\Responsable;
use Sun\BelAssist\ResponseGenerators\FailureResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;

abstract class AbstractResponsableException extends Exception implements Responsable
{
    public function toResponse($request)
    {
        $generator = new FailureResponseGenerator($this->getFirstResponseCode(), $this->getSecondResponseCode());

        return new BelAssistResponse($generator);
    }

    protected abstract function getFirstResponseCode(): int;

    protected abstract function getSecondResponseCode(): int;
}
