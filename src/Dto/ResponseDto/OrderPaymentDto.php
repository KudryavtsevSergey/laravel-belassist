<?php

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\OperationTypeEnum;
use Sun\BelAssist\Enum\ResponseCodeEnum;

class OrderPaymentDto extends OrderStateResponseDto
{
    private string $merchantId;
    private bool $testMode;
    private ?string $orderComment;
    private float $amount;
    private string $currency;
    private float $rate;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $middleName;
    private ?string $email;
    private ?string $clientIp;
    private ?string $ipAddress;
    private int $meanTypeId;
    private int $meanTypeName;
    private string $meanSubtype;
    private string $meanNumber;
    private string $cardHolder;
    private string $cardExpirationDate;
    private string $issueBank;
    private string $bankCountry;
    private DateTimeInterface $orderDate;
    private string $responseCode;
    private ?string $message;
    private ?string $customerMessage;
    private ?string $recommendation;
    private ?string $approvalCode;
    private ?string $protocolTypeName;
    private ?string $processingName;
    private string $operationType;
    private DateTimeInterface $operationDate;
    private ?string $authResult;
    private bool $authRequired;
    private ?string $signature;
    private ?string $slipNo;

    public function __construct(
        string $billNumber,
        string $orderNumber,
        string $orderState,
        float $orderAmount,
        string $orderCurrency,
        DateTimeInterface $packetDate,
        string $checkValue,

        string $merchantId,
        bool $testMode,
        ?string $orderComment,
        float $amount,
        string $currency,
        float $rate,
        ?string $firstName,
        ?string $lastName,
        ?string $middleName,
        ?string $email,
        ?string $clientIp,
        ?string $ipAddress,
        int $meanTypeId,
        int $meanTypeName,
        string $meanSubtype,
        string $meanNumber,
        string $cardHolder,
        string $cardExpirationDate,
        string $issueBank,
        string $bankCountry,
        DateTimeInterface $orderDate,
        string $responseCode,
        ?string $message,
        ?string $customerMessage,
        ?string $recommendation,
        ?string $approvalCode,
        ?string $protocolTypeName,
        ?string $processingName,
        string $operationType,
        DateTimeInterface $operationDate,
        ?string $authResult,
        bool $authRequired,
        ?string $signature,
        ?string $slipNo
    ) {
        ResponseCodeEnum::checkAllowedValue($responseCode);
        OperationTypeEnum::checkAllowedValue($operationType);
        parent::__construct($billNumber, $orderNumber, $orderState, $orderAmount, $orderCurrency, $packetDate, $checkValue);

        $this->merchantId = $merchantId;
        $this->testMode = $testMode;
        $this->orderComment = $orderComment;
        $this->amount = $amount;
        $this->currency = $currency;
        $this->rate = $rate;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->email = $email;
        $this->clientIp = $clientIp;
        $this->ipAddress = $ipAddress;
        $this->meanTypeId = $meanTypeId;
        $this->meanTypeName = $meanTypeName;
        $this->meanSubtype = $meanSubtype;
        $this->meanNumber = $meanNumber;
        $this->cardHolder = $cardHolder;
        $this->cardExpirationDate = $cardExpirationDate;
        $this->issueBank = $issueBank;
        $this->bankCountry = $bankCountry;
        $this->orderDate = $orderDate;
        $this->responseCode = $responseCode;
        $this->message = $message;
        $this->customerMessage = $customerMessage;
        $this->recommendation = $recommendation;
        $this->approvalCode = $approvalCode;
        $this->protocolTypeName = $protocolTypeName;
        $this->processingName = $processingName;
        $this->operationType = $operationType;
        $this->operationDate = $operationDate;
        $this->authResult = $authResult;
        $this->authRequired = $authRequired;
        $this->signature = $signature;
        $this->slipNo = $slipNo;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function isTestMode(): bool
    {
        return $this->testMode;
    }

    public function getOrderComment(): ?string
    {
        return $this->orderComment;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
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

    public function getMeanTypeName(): int
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

    public function isAuthRequired(): bool
    {
        return $this->authRequired;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function getSlipNo(): ?string
    {
        return $this->slipNo;
    }
}
