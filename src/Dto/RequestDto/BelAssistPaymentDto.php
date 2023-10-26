<?php

declare(strict_types=1);

namespace Sun\BelAssist\Dto\RequestDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\BelAssistCurrencyEnum;
use Sun\BelAssist\Enum\CardPaymentEnum;
use Sun\BelAssist\Enum\DelayEnum;
use Sun\BelAssist\Enum\LanguageEnum;
use Sun\BelAssist\Enum\RecurringIndicatorEnum;
use Sun\BelAssist\Service\CheckValue\CheckValueInterface;
use Sun\BelAssist\Service\Signature\SignatureInterface;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class BelAssistPaymentDto implements CheckValueInterface, SignatureInterface, RequestDtoInterface
{
    public function __construct(
        #[SerializedName('OrderNumber')] private readonly string $order,
        #[SerializedName('OrderAmount')] private readonly float $amount,
        #[SerializedName('OrderCurrency')] private readonly string $currency,
        #[SerializedName('Delay')] private readonly int $delay = DelayEnum::ONE_STAGE,
        #[SerializedName('Language')] private readonly ?string $language = null,
        #[SerializedName('OrderComment')] private readonly ?string $comment = null,
        #[SerializedName('Lastname')] private readonly ?string $lastname = null,
        #[SerializedName('Firstname')] private readonly ?string $name = null,
        #[SerializedName('Middlename')] private readonly ?string $middleName = null,
        #[SerializedName('Email')] private readonly ?string $email = null,
        #[SerializedName('Address')] private readonly ?string $address = null,
        #[SerializedName('HomePhone')] private readonly ?string $homePhone = null,
        #[SerializedName('WorkPhone')] private readonly ?string $workPhone = null,
        #[SerializedName('MobilePhone')] private readonly ?string $phone = null,
        #[SerializedName('Fax')] private readonly ?string $fax = null,
        #[SerializedName('Country')] private readonly ?string $country = null,
        #[SerializedName('State')] private readonly ?string $state = null,
        #[SerializedName('City')] private readonly ?string $city = null,
        #[SerializedName('Zip')] private readonly ?string $zip = null,
        #[SerializedName('URL_RETURN')] private readonly ?string $urlReturn = null,
        #[SerializedName('URL_RETURN_OK')] private readonly ?string $urlReturnOk = null,
        #[SerializedName('URL_RETURN_NO')] private readonly ?string $urlReturnNo = null,
        #[SerializedName('CardPayment')] private readonly int $cardPayment = CardPaymentEnum::USE_CREDIT_CARD_PAYMENT,
        #[SerializedName('RecurringIndicator')] private readonly int $recurringIndicator = RecurringIndicatorEnum::NON_RECURRING_PAYMENT,
        #[SerializedName('RecurringMinAmount')] private readonly ?int $recurringMinAmount = null,
        #[SerializedName('RecurringMaxAmount')] private readonly ?int $recurringMaxAmount = null,
        #[SerializedName('RecurringPeriod')] private readonly ?int $recurringPeriod = null,
        #[SerializedName('RecurringMaxDate'), Context([DateTimeNormalizer::FORMAT_KEY => 'd.m.Y'])] private readonly ?DateTimeInterface $recurringMaxDate = null,
    ) {
        BelAssistCurrencyEnum::checkAllowedValue($currency);
        DelayEnum::checkAllowedValue($delay);
        LanguageEnum::checkAllowedValue($language, true);
        CardPaymentEnum::checkAllowedValue($cardPayment);
        RecurringIndicatorEnum::checkAllowedValue($recurringIndicator);
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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    public function getWorkPhone(): ?string
    {
        return $this->workPhone;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function getUrlReturn(): ?string
    {
        return $this->urlReturn;
    }

    public function getUrlReturnOk(): ?string
    {
        return $this->urlReturnOk;
    }

    public function getUrlReturnNo(): ?string
    {
        return $this->urlReturnNo;
    }

    public function getCardPayment(): int
    {
        return $this->cardPayment;
    }

    public function getRecurringIndicator(): int
    {
        return $this->recurringIndicator;
    }

    public function getRecurringMinAmount(): ?int
    {
        return $this->recurringMinAmount;
    }

    public function getRecurringMaxAmount(): ?int
    {
        return $this->recurringMaxAmount;
    }

    public function getRecurringPeriod(): ?int
    {
        return $this->recurringPeriod;
    }

    public function getRecurringMaxDate(): ?DateTimeInterface
    {
        return $this->recurringMaxDate;
    }
}
