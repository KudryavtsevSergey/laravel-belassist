<?php

declare(strict_types=1);

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\BelAssistCurrencyEnum;
use Sun\BelAssist\Enum\OrderStateEnum;
use Sun\BelAssist\Service\CheckValue\CheckValueInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class OrderStateResponseDto implements CheckValueInterface, ResponseDtoInterface
{
    public function __construct(
        #[SerializedName('billnumber')] private readonly string $billNumber,
        #[SerializedName('Ordernumber')] private readonly string $orderNumber,
        #[SerializedName('orderstate')] private readonly string $orderState,
        #[SerializedName('orderamount')] private readonly float $orderAmount,
        #[SerializedName('ordercurrency')] private readonly string $orderCurrency,
        #[SerializedName('packetdate')] private readonly DateTimeInterface $packetDate,
        #[SerializedName('checkvalue')] private readonly string $checkValue,
    ) {
        OrderStateEnum::checkAllowedValue($orderState);
        BelAssistCurrencyEnum::checkAllowedValue($orderCurrency);
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

    public function getOrder(): string
    {
        return $this->orderNumber;
    }

    public function getAmount(): float
    {
        return $this->orderAmount;
    }

    public function getCurrency(): string
    {
        return $this->orderCurrency;
    }
}
