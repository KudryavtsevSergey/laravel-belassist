<?php

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\CurrencyEnum;
use Sun\BelAssist\Enum\OrderStateEnum;

class OrderStateResponseDto implements ResponseDtoInterface
{
    private string $billNumber;
    private int $orderNumber;
    private string $orderState;
    private float $orderAmount;
    private string $orderCurrency;
    private DateTimeInterface $packetDate;
    private string $checkValue;

    public function __construct(
        string $billNumber,
        string $orderNumber,
        string $orderState,
        float $orderAmount,
        string $orderCurrency,
        DateTimeInterface $packetDate,
        string $checkValue
    ) {
        OrderStateEnum::checkAllowedValue($orderState);
        CurrencyEnum::checkAllowedValue($orderCurrency);
        $this->billNumber = $billNumber;
        $this->orderNumber = $orderNumber;
        $this->orderState = $orderState;
        $this->orderAmount = $orderAmount;
        $this->orderCurrency = $orderCurrency;
        $this->packetDate = $packetDate;
        $this->checkValue = $checkValue;
    }

    public function getBillNumber(): string
    {
        return $this->billNumber;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getOrderState(): string
    {
        return $this->orderState;
    }

    public function getOrderAmount(): float
    {
        return $this->orderAmount;
    }

    public function getOrderCurrency(): string
    {
        return $this->orderCurrency;
    }

    public function getPacketDate(): DateTimeInterface
    {
        return $this->packetDate;
    }

    public function getCheckValue(): string
    {
        return $this->checkValue;
    }
}
