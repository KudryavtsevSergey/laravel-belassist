<?php

namespace Sun\BelAssist\Exceptions;

class InvalidValueException extends InternalError
{
    public function __construct(mixed $value, array $allowedValues)
    {
        $message = sprintf(
            'Value "%s" is not allowed. Allowed values are: %s',
            $value,
            implode(', ', $allowedValues)
        );
        parent::__construct($message);
    }
}
