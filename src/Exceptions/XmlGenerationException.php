<?php

declare(strict_types=1);

namespace Sun\BelAssist\Exceptions;

class XmlGenerationException extends InternalError
{
    public function __construct()
    {
        parent::__construct('Error xml generation');
    }
}
