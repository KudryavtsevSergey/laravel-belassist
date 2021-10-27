<?php

namespace Sun\BelAssist\Service;

interface CheckValueInterface
{
    public function getOrder(): string;

    public function getAmount(): float;

    public function getCurrency(): string;
}
