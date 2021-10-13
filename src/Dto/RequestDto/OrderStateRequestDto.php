<?php

namespace Sun\BelAssist\Dto\RequestDto;

class OrderStateRequestDto implements RequestDtoInterface
{
    private string $orderNumber;

    private ?string $startYear;
    private ?string $startMonth;
    private ?string $startDay;
    private ?string $startHour;
    private ?string $startMin;

    private ?string $endYear;
    private ?string $endMonth;
    private ?string $endDay;
    private ?string $endHour;
    private ?string $endMin;

    public function __construct(
        string $orderNumber,
        ?string $startYear = null,
        ?string $startMonth = null,
        ?string $startDay = null,
        ?string $startHour = null,
        ?string $startMin = null,
        ?string $endYear = null,
        ?string $endMonth = null,
        ?string $endDay = null,
        ?string $endHour = null,
        ?string $endMin = null
    ) {
        $this->orderNumber = $orderNumber;
        $this->startYear = $startYear;
        $this->startMonth = $startMonth;
        $this->startDay = $startDay;
        $this->startHour = $startHour;
        $this->startMin = $startMin;
        $this->endYear = $endYear;
        $this->endMonth = $endMonth;
        $this->endDay = $endDay;
        $this->endHour = $endHour;
        $this->endMin = $endMin;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getStartYear(): ?string
    {
        return $this->startYear;
    }

    public function getStartMonth(): ?string
    {
        return $this->startMonth;
    }

    public function getStartDay(): ?string
    {
        return $this->startDay;
    }

    public function getStartHour(): ?string
    {
        return $this->startHour;
    }

    public function getStartMin(): ?string
    {
        return $this->startMin;
    }

    public function getEndYear(): ?string
    {
        return $this->endYear;
    }

    public function getEndMonth(): ?string
    {
        return $this->endMonth;
    }

    public function getEndDay(): ?string
    {
        return $this->endDay;
    }

    public function getEndHour(): ?string
    {
        return $this->endHour;
    }

    public function getEndMin(): ?string
    {
        return $this->endMin;
    }
}
