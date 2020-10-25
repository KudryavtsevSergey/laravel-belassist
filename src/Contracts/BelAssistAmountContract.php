<?php

namespace Sun\BelAssist\Contracts;

interface BelAssistAmountContract
{
    public function getAmount(): float;

    public function getBelAssistCurrency(): string;
}
