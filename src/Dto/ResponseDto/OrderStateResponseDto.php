<?php

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\BelAssistCurrencyEnum;
use Sun\BelAssist\Enum\OrderStateEnum;
use Sun\BelAssist\Service\CheckValueInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class OrderStateResponseDto implements CheckValueInterface, ResponseDtoInterface
{
    public function __construct(
        #[SerializedName('billnumber')] private string $billNumber,
        #[SerializedName('Ordernumber')] private string $orderNumber,
        #[SerializedName('orderstate')] private string $orderState,
        #[SerializedName('orderamount')] private float $orderAmount,
        #[SerializedName('ordercurrency')] private string $orderCurrency,
        #[SerializedName('packetdate')] private DateTimeInterface $packetDate,
        #[SerializedName('checkvalue')] private string $checkValue,
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
