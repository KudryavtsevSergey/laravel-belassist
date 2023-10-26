<?php

declare(strict_types=1);

namespace Sun\BelAssist\Events;

use Sun\BelAssist\Dto\ResponseDto\OrderPaymentDto;

class BelAssistPaymentReceivedEvent
{
    public function __construct(
        private readonly OrderPaymentDto $orderPaymentDto,
    ) {
    }

    public function getOrderPaymentDto(): OrderPaymentDto
    {
        return $this->orderPaymentDto;
    }
}
