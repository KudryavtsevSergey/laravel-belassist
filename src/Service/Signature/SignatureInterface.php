<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service\Signature;

interface SignatureInterface
{
    public function getOrder(): string;

    public function getAmount(): float;

    public function getCurrency(): string;
}
