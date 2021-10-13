<?php

namespace Sun\BelAssist\Events;

use Sun\BelAssist\Dto\ResponseDto\OrderPaymentDto;

class BelAssistPaymentReceivedEvent
{
    private OrderPaymentDto $orderPaymentDto;

    public function __construct(OrderPaymentDto $orderPaymentDto)
    {
        $this->orderPaymentDto = $orderPaymentDto;
    }

    public function getOrderPaymentDto(): OrderPaymentDto
    {
        return $this->orderPaymentDto;
    }
}
