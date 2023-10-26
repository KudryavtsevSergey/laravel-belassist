<?php

declare(strict_types=1);

namespace Sun\BelAssist\Dto\RequestDto;

use Symfony\Component\Serializer\Annotation\SerializedName;

class OrderStateRequestDto implements RequestDtoInterface
{
    public function __construct(
        #[SerializedName('Ordernumber')] private readonly string $orderNumber,
        #[SerializedName('StartYear')] private readonly ?string $startYear = null,
        #[SerializedName('StartMonth')] private readonly ?string $startMonth = null,
        #[SerializedName('StartDay')] private readonly ?string $startDay = null,
        #[SerializedName('StartHour')] private readonly ?string $startHour = null,
        #[SerializedName('StartMin')] private readonly ?string $startMin = null,
        #[SerializedName('EndYear')] private readonly ?string $endYear = null,
        #[SerializedName('EndMonth')] private readonly ?string $endMonth = null,
        #[SerializedName('EndDay')] private readonly ?string $endDay = null,
        #[SerializedName('EndHour')] private readonly ?string $endHour = null,
        #[SerializedName('EndMin')] private readonly ?string $endMin = null,
    ) {
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
