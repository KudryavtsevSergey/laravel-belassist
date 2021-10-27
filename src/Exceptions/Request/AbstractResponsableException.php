<?php

namespace Sun\BelAssist\Exceptions\Request;

use Illuminate\Contracts\Support\Responsable;
use Sun\BelAssist\Exceptions\InternalError;
use Sun\BelAssist\ResponseGenerators\FailureResponseGenerator;
use Sun\BelAssist\Responses\BelAssistResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractResponsableException extends InternalError implements Responsable
{
    public function toResponse($request): Response
    {
        $generator = new FailureResponseGenerator($this->getFirstResponseCode(), $this->getSecondResponseCode());
        return (new BelAssistResponse($generator))->toResponse($request);
    }

    protected abstract function getFirstResponseCode(): int;

    protected abstract function getSecondResponseCode(): int;
}
