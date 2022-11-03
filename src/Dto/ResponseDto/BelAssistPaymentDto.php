<?php

namespace Sun\BelAssist\Dto\ResponseDto;

use Illuminate\Contracts\Support\Arrayable;
use Sun\BelAssist\Enum\DelayEnum;
use Sun\BelAssist\Enum\LanguageEnum;
use Sun\BelAssist\Service\CheckValueInterface;
use Sun\BelAssist\Service\SignatureInterface;

class BelAssistPaymentDto implements CheckValueInterface, SignatureInterface, Arrayable, ResponseDtoInterface
{
    public function __construct(
        private string $order,
        private float $amount,
        private string $currency,
        private int $delay = DelayEnum::ONE_STAGE,
        private ?string $language = null,
        private ?string $lastname = null,
        private ?string $name = null,
        private ?string $email = null,
        private ?string $phone = null,
        private ?string $urlReturn = null,
    ) {
        DelayEnum::checkAllowedValue($delay);
        LanguageEnum::checkAllowedValue($language, true);
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getUrlReturn(): ?string
    {
        return $this->urlReturn;
    }

    public function getFormattedAmount(): float
    {
        return number_format($this->amount, '2', '.', '');
    }

    public function toArray(): array
    {
        return [
            'order' => $this->order,
            'delay' => $this->delay,
            'language' => $this->language,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'lastname' => $this->lastname,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'urlReturn' => $this->urlReturn,
        ];
    }
}
