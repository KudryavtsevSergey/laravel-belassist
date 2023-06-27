<?php

declare(strict_types=1);

namespace Sun\BelAssist\Exceptions;

class InvalidValueException extends InternalError
{
    public function __construct(string|int|null $value, array $allowedValues)
    {
        $message = sprintf(
            'Value "%s" is not allowed. Allowed values are: %s',
            $value,
            implode(', ', $allowedValues)
        );
        parent::__construct($message);
    }
}
