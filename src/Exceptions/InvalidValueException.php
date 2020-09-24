<?php

namespace Sun\BelAssist\Exceptions;

use Exception;

class InvalidValueException extends Exception
{
    private $value;
    private array $allowedValues;

    public function __construct($value, array $allowedValues)
    {
        $message = sprintf(
            'Value "%s" is not allowed. Allowed values are: %s',
            $value,
            implode(', ', $allowedValues)
        );
        parent::__construct($message);
        $this->value = $value;
        $this->allowedValues = $allowedValues;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getAllowedValues(): array
    {
        return $this->allowedValues;
    }
}
