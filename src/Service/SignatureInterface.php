<?php

namespace Sun\BelAssist\Service;

interface SignatureInterface
{
    public function getOrder(): string;

    public function getAmount(): float;

    public function getCurrency(): string;
}
