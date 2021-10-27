<?php

namespace Sun\BelAssist\Dto\ResponseDto;

use DateTimeInterface;
use Sun\BelAssist\Enum\OperationTypeEnum;
use Sun\BelAssist\Enum\ResponseCodeEnum;
use Sun\BelAssist\Service\CheckValueInterface;
use Sun\BelAssist\Service\SignatureInterface;
use Symfony\Component\Serializer\Annotation\SerializedName;

class OrderPaymentDto implements SignatureInterface, CheckValueInterface, ResponseDtoInterface
{
    /**
     * @SerializedName("merchant_id")
     */
    private string $merchantId;

    /**
     * @SerializedName("ordernumber")
     */
    private int $orderNumber;

    /**
     * @SerializedName("billnumber")
     */
    private string $billNumber;

    /**
     * @SerializedName("testmode")
     */
    private bool $testMode;

    /**
     * @SerializedName("ordercomment")
     */
    private ?string $orderComment;

    /**
     * @SerializedName("orderamount")
     */
    private float $orderAmount;

    /**
     * @SerializedName("ordercurrency")
     */
    private string $orderCurrency;

    /**
     * @SerializedName("amount")
     */
    private float $operationAmount;

    /**
     * @SerializedName("currency")
     */
    private string $operationCurrency;

    private float $rate;
    private ?string $firstname;
    private ?string $lastname;
    private ?string $middlename;
    private ?string $email;

    /**
     * @SerializedName("clientip")
     */
    private ?string $clientIp;

    /**
     * @SerializedName("ipaddress")
     */
    private ?string $ipAddress;

    /**
     * @SerializedName("meantype_id")
     */
    private int $meanTypeId;

    /**
     * @SerializedName("meantypename")
     */
    private string $meanTypeName;

    /**
     * @SerializedName("meansubtype")
     */
    private string $meanSubtype;

    /**
     * @SerializedName("meannumber")
     */
    private string $meanNumber;

    /**
     * @SerializedName("cardholder")
     */
    private string $cardHolder;

    /**
     * @SerializedName("cardexpirationdate")
     */
    private string $cardExpirationDate;

    /**
     * @SerializedName("issuebank")
     */
    private string $issueBank;

    /**
     * @SerializedName("bankcountry")
     */
    private string $bankCountry;

    /**
     * @SerializedName("orderdate")
     */
    private DateTimeInterface $orderDate;

    /**
     * @SerializedName("orderstate")
     */
    private string $orderState;

    /**
     * @SerializedName("responsecode")
     */
    private string $responseCode;

    private ?string $message;

    /**
     * @SerializedName("customermessage")
     */
    private ?string $customerMessage;

    /**
     * @SerializedName("recommendation")
     */
    private ?string $recommendation;

    /**
     * @SerializedName("approvalcode")
     */
    private ?string $approvalCode;

    /**
     * @SerializedName("protocoltypename")
     */
    private ?string $protocolTypeName;

    /**
     * @SerializedName("processingname")
     */
    private ?string $processingName;

    /**
     * @SerializedName("operationtype")
     */
    private string $operationType;

    /**
     * @SerializedName("operationdate")
     */
    private DateTimeInterface $operationDate;

    /**
     * @SerializedName("authresult")
     */
    private ?string $authResult;

    /**
     * @SerializedName("authrequired")
     */
    private ?bool $authRequired;

    /**
     * @SerializedName("packetdate")
     */
    private DateTimeInterface $packetDate;

    /**
     * @SerializedName("signature")
     */
    private ?string $signature;

    /**
     * @SerializedName("checkvalue")
     */
    private string $checkValue;

    /**
     * @SerializedName("slipno")
     */
    private ?string $slipNo;

    public function __construct(
        string $merchantId,
        int $orderNumber,
        string $billNumber,
        bool $testMode,
        ?string $orderComment,
        float $orderAmount,
        string $orderCurrency,
        float $operationAmount,
        string $operationCurrency,
        float $rate,
        ?string $firstname,
        ?string $lastname,
        ?string $middlename,
        ?string $email,
        ?string $clientIp,
        ?string $ipAddress,
        int $meanTypeId,
        string $meanTypeName,
        string $meanSubtype,
        string $meanNumber,
        string $cardHolder,
        string $cardExpirationDate,
        string $issueBank,
        string $bankCountry,
        DateTimeInterface $orderDate,
        string $orderState,
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
        ?bool $authRequired,
        DateTimeInterface $packetDate,
        ?string $signature,
        string $checkValue,
        ?string $slipNo
    ) {
        ResponseCodeEnum::checkAllowedValue($responseCode);
        OperationTypeEnum::checkAllowedValue($operationType);

        $this->merchantId = $merchantId;
        $this->orderNumber = $orderNumber;
        $this->billNumber = $billNumber;
        $this->testMode = $testMode;
        $this->orderComment = $orderComment;
        $this->orderAmount = $orderAmount;
        $this->orderCurrency = $orderCurrency;
        $this->operationAmount = $operationAmount;
        $this->operationCurrency = $operationCurrency;
        $this->rate = $rate;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->middlename = $middlename;
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
        $this->orderState = $orderState;
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
        $this->packetDate = $packetDate;
        $this->signature = $signature;
        $this->checkValue = $checkValue;
        $this->slipNo = $slipNo;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function getOrderNumber(): int
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
