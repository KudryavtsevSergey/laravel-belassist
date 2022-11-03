<?php

namespace Sun\BelAssist\Events;

use Sun\BelAssist\Dto\ResponseDto\OrderPaymentDto;

class BelAssistPaymentReceivedEvent
{
    public function __construct(
        private OrderPaymentDto $orderPaymentDto,
    ) {
    }

    public function getOrderPaymentDto(): OrderPaymentDto
    {
        return $this->orderPaymentDto;
    }
}
