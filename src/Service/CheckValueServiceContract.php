<?php

namespace Sun\BelAssist\Service;

interface CheckValueServiceContract
{
    public function generate(CheckValueInterface $checkValue): string;

    public function verify(CheckValueInterface $checkValue, string $value): bool;
}
