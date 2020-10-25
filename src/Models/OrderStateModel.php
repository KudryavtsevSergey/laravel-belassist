<?php

namespace Sun\BelAssist\Models;

class OrderStateModel extends AbstractModel
{
    private ?string $billNumber = null;
    private ?string $orderNumber = null;
    private ?string $orderState = null;
    private ?string $orderAmount = null;
    private ?string $orderCurrency = null;
    private ?string $packetDate = null;
    private ?string $checkValue = null;

    public function getBillNumber(): ?string
    {
        return $this->billNumber;
    }

    public function setBillNumber(?string $billNumber): self
    {
        $this->billNumber = $billNumber;
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    public function getOrderState(): ?string
    {
        return $this->orderState;
    }

    public function setOrderState(?string $orderState): self
    {
        $this->orderState = $orderState;
        return $this;
    }

    public function getOrderAmount(): ?string
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(?string $orderAmount): self
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }

    public function getOrderCurrency(): ?string
    {
        return $this->orderCurrency;
    }

    public function setOrderCurrency(?string $orderCurrency): self
    {
        $this->orderCurrency = $orderCurrency;
        return $this;
    }

    public function getPacketDate(): ?string
    {
        return $this->packetDate;
    }

    public function setPacketDate(?string $packetDate): self
    {
        $this->packetDate = $packetDate;
        return $this;
    }

    public function getCheckValue(): ?string
    {
        return $this->checkValue;
    }

    public function setCheckValue(?string $checkValue): self
    {
        $this->checkValue = $checkValue;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setBillNumber($data['billnumber'] ?? null)
            ->setOrderNumber($data['ordernumber'] ?? null)
            ->setOrderState($data['orderstate'] ?? null)
            ->setOrderAmount($data['orderamount'] ?? null)
            ->setOrderCurrency($data['ordercurrency'] ?? null)
            ->setPacketDate($data['packetdate'] ?? null)
            ->setCheckValue($data['checkvalue'] ?? null);
    }
}
