<?php

declare(strict_types=1);

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\OperationTypeEnum;
use Sun\BelAssist\Enum\ResponseCodeEnum;
use Sun\BelAssist\Service\CheckValue\CheckValueInterface;
use Sun\BelAssist\Service\Signature\SignatureInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class OrderPaymentDto implements SignatureInterface, CheckValueInterface, ResponseDtoInterface
{
    public function __construct(
        #[SerializedName('merchant_id')] private readonly string $merchantId,
        #[SerializedName('ordernumber')] private readonly string $orderNumber,
        #[SerializedName('billnumber')] private readonly string $billNumber,
        #[SerializedName('testmode')] private readonly bool $testMode,
        #[SerializedName('ordercomment')] private readonly ?string $orderComment,
        #[SerializedName('orderamount')] private readonly float $orderAmount,
        #[SerializedName('ordercurrency')] private readonly string $orderCurrency,
        #[SerializedName('amount')] private readonly float $operationAmount,
        #[SerializedName('currency')] private readonly string $operationCurrency,
        private readonly float $rate,
        private readonly ?string $firstname,
        private readonly ?string $lastname,
        private readonly ?string $middlename,
        private readonly ?string $email,
        #[SerializedName('clientip')] private readonly ?string $clientIp,
        #[SerializedName('ipaddress')] private readonly ?string $ipAddress,
        #[SerializedName('meantype_id')] private readonly int $meanTypeId,
        #[SerializedName('meantypename')] private readonly string $meanTypeName,
        #[SerializedName('meansubtype')] private readonly string $meanSubtype,
        #[SerializedName('meannumber')] private readonly string $meanNumber,
        #[SerializedName('cardholder')] private readonly string $cardHolder,
        #[SerializedName('cardexpirationdate')] private readonly string $cardExpirationDate,
        #[SerializedName('issuebank')] private readonly string $issueBank,
        #[SerializedName('bankcountry')] private readonly string $bankCountry,
        #[SerializedName('orderdate')] private readonly DateTimeInterface $orderDate,
        #[SerializedName('orderstate')] private readonly string $orderState,
        #[SerializedName('responsecode')] private readonly string $responseCode,
        private readonly ?string $message,
        #[SerializedName('customermessage')] private readonly ?string $customerMessage,
        #[SerializedName('recommendation')] private readonly ?string $recommendation,
        #[SerializedName('approvalcode')] private readonly ?string $approvalCode,
        #[SerializedName('protocoltypename')] private readonly ?string $protocolTypeName,
        #[SerializedName('processingname')] private readonly ?string $processingName,
        #[SerializedName('operationtype')] private readonly string $operationType,
        #[SerializedName('operationdate')] private readonly DateTimeInterface $operationDate,
        #[SerializedName('authresult')] private readonly ?string $authResult,
        #[SerializedName('authrequired')] private readonly ?bool $authRequired,
        #[SerializedName('packetdate')] private readonly DateTimeInterface $packetDate,
        #[SerializedName('signature')] private readonly ?string $signature,
        #[SerializedName('checkvalue')] private readonly string $checkValue,
        #[SerializedName('slipno')] private readonly ?string $slipNo,
    ) {
        ResponseCodeEnum::checkAllowedValue($responseCode);
        OperationTypeEnum::checkAllowedValue($operationType);
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getBillNumber(): string
    {
        return $this->billNumber;
    }

    public function isTestMode(): bool
    {
        return $this->testMode;
    }

    public function getOrderComment(): ?string
    {
        return $this->orderComment;
    }

    public function getOrderAmount(): float
    {
        return $this->orderAmount;
    }

    public function getOrderCurrency(): string
    {
        return $this->orderCurrency;
    }

    public function getOperationAmount(): float
    {
        return $this->operationAmount;
    }

    public function getOperationCurrency(): string
    {
        return $this->operationCurrency;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function getMeanTypeId(): int
    {
        return $this->meanTypeId;
    }

    public function getMeanTypeName(): string
    {
        return $this->meanTypeName;
    }

    public function getMeanSubtype(): string
    {
        return $this->meanSubtype;
    }

    public function getMeanNumber(): string
    {
        return $this->meanNumber;
    }

    public function getCardHolder(): string
    {
        return $this->cardHolder;
    }

    public function getCardExpirationDate(): string
    {
        return $this->cardExpirationDate;
    }

    public function getIssueBank(): string
    {
        return $this->issueBank;
    }

    public function getBankCountry(): string
    {
        return $this->bankCountry;
    }

    public function getOrderDate(): DateTimeInterface
    {
        return $this->orderDate;
    }

    public function getOrderState(): string
    {
        return $this->orderState;
    }

    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getCustomerMessage(): ?string
    {
        return $this->customerMessage;
    }

    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function getProtocolTypeName(): ?string
    {
        return $this->protocolTypeName;
    }

    public function getProcessingName(): ?string
    {
        return $this->processingName;
    }

    public function getOperationType(): string
    {
        return $this->operationType;
    }

    public function getOperationDate(): DateTimeInterface
    {
        return $this->operationDate;
    }

    public function getAuthResult(): ?string
    {
        return $this->authResult;
    }

    public function isAuthRequired(): ?bool
    {
        return $this->authRequired;
    }

    public function getPacketDate(): DateTimeInterface
    {
        return $this->packetDate;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function getCheckValue(): string
    {
        return $this->checkValue;
    }

    public function getSlipNo(): ?string
    {
        return $this->slipNo;
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
