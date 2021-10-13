<?php

namespace Sun\BelAssist\Exceptions;

use RuntimeException;
use Throwable;

class InternalError extends RuntimeException
{
    public function __construct(string $message, Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
