<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service\CheckValue;

interface CheckValueServiceInterface
{
    public function generate(CheckValueInterface $checkValue): string;

    public function verify(CheckValueInterface $checkValue, string $expected): bool;
}
