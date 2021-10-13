<?php

namespace Sun\BelAssist\Requests;

use Sun\BelAssist\Enum\CurrencyEnum;
use Sun\BelAssist\Contracts\BelAssistAmountContract;
use Sun\BelAssist\Enum\DelayEnum;
use Sun\BelAssist\Enum\LanguageEnum;

class BelAssistPayment
{
    private string $order;
    private int $delay = DelayEnum::ONE_STAGE;
    private ?string $language = null;
    private float $amount;
    private string $currency;
    private ?string $lastname = null;
    private ?string $name = null;
    private ?string $email = null;
    private ?string $phone = null;
    private ?string $urlReturn = null;

    public function __construct(string $order, BelAssistAmountContract $amount)
    {
        $currency = $amount->getBelAssistCurrency();
        CurrencyEnum::checkAllowedValue($currency);
        $this->order = $order;
        $this->amount = $amount->getAmount();
        $this->currency = $currency;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): self
    {
        DelayEnum::checkAllowedValue($delay);
        $this->delay = $delay;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        LanguageEnum::checkAllowedValue($language, true);
        $this->language = $language;
        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function getUrlReturn(): ?string
    {
        return $this->urlReturn;
    }

    public function setUrlReturn(?string $urlReturn): self
    {
        $this->urlReturn = $urlReturn;
        return $this;
    }

    public function getFormattedAmount(): float
    {
        return number_format($this->amount, '2', '.', '');
    }
}
