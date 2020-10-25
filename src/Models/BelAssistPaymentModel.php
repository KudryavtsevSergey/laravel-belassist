<?php

namespace Sun\BelAssist\Models;

class BelAssistPaymentModel extends AbstractModel
{
    private ?string $merchantId = null;
    private ?string $orderNumber = null;
    private ?string $billNumber = null;
    private ?string $testMode = null;
    private ?string $orderComment = null;
    private ?string $orderAmount = null;
    private ?string $orderCurrency = null;
    private ?string $amount = null;
    private ?string $currency = null;
    private ?string $rate = null;
    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $middleName = null;
    private ?string $email = null;
    private ?string $clientIp = null;
    private ?string $ipAddress = null;
    private ?string $meanTypeId = null;
    private ?string $meanTypeName = null;
    private ?string $meanSubtype = null;
    private ?string $meanNumber = null;
    private ?string $cardHolder = null;
    private ?string $cardExpirationDate = null;
    private ?string $issueBank = null;
    private ?string $bankCountry = null;
    private ?string $orderDate = null;
    private ?string $orderState = null;
    private ?string $responseCode = null;
    private ?string $message = null;
    private ?string $customerMessage = null;
    private ?string $recommendation = null;
    private ?string $approvalCode = null;
    private ?string $protocolTypeName = null;
    private ?string $processingName = null;
    private ?string $operationType = null;
    private ?string $operationDate = null;
    private ?string $authResult = null;
    private ?string $authRequired = null;
    private ?string $packetDate = null;
    private ?string $signature = null;
    private ?string $checkValue = null;
    private ?string $slipNo = null;

    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    public function setMerchantId(?string $merchantId): self
    {
        $this->merchantId = $merchantId;
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

    public function getBillNumber(): ?string
    {
        return $this->billNumber;
    }

    public function setBillNumber(?string $billNumber): self
    {
        $this->billNumber = $billNumber;
        return $this;
    }

    public function getTestMode(): ?string
    {
        return $this->testMode;
    }

    public function setTestMode(?string $testMode): self
    {
        $this->testMode = $testMode;
        return $this;
    }

    public function getOrderComment(): ?string
    {
        return $this->orderComment;
    }

    public function setOrderComment(?string $orderComment): self
    {
        $this->orderComment = $orderComment;
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

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(?string $rate): self
    {
        $this->rate = $rate;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;
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

    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    public function setClientIp(?string $clientIp): self
    {
        $this->clientIp = $clientIp;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getMeanTypeId(): ?string
    {
        return $this->meanTypeId;
    }

    public function setMeanTypeId(?string $meanTypeId): self
    {
        $this->meanTypeId = $meanTypeId;
        return $this;
    }

    public function getMeanTypeName(): ?string
    {
        return $this->meanTypeName;
    }

    public function setMeanTypeName(?string $meanTypeName): self
    {
        $this->meanTypeName = $meanTypeName;
        return $this;
    }

    public function getMeanSubtype(): ?string
    {
        return $this->meanSubtype;
    }

    public function setMeanSubtype(?string $meanSubtype): self
    {
        $this->meanSubtype = $meanSubtype;
        return $this;
    }

    public function getMeanNumber(): ?string
    {
        return $this->meanNumber;
    }

    public function setMeanNumber(?string $meanNumber): self
    {
        $this->meanNumber = $meanNumber;
        return $this;
    }

    public function getCardHolder(): ?string
    {
        return $this->cardHolder;
    }

    public function setCardHolder(?string $cardHolder): self
    {
        $this->cardHolder = $cardHolder;
        return $this;
    }

    public function getCardExpirationDate(): ?string
    {
        return $this->cardExpirationDate;
    }

    public function setCardExpirationDate(?string $cardExpirationDate): self
    {
        $this->cardExpirationDate = $cardExpirationDate;
        return $this;
    }

    public function getIssueBank(): ?string
    {
        return $this->issueBank;
    }

    public function setIssueBank(?string $issueBank): self
    {
        $this->issueBank = $issueBank;
        return $this;
    }

    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    public function setBankCountry(?string $bankCountry): self
    {
        $this->bankCountry = $bankCountry;
        return $this;
    }

    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    public function setOrderDate(?string $orderDate): self
    {
        $this->orderDate = $orderDate;
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

    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    public function setResponseCode(?string $responseCode): self
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getCustomerMessage(): ?string
    {
        return $this->customerMessage;
    }

    public function setCustomerMessage(?string $customerMessage): self
    {
        $this->customerMessage = $customerMessage;
        return $this;
    }

    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    public function setRecommendation(?string $recommendation): self
    {
        $this->recommendation = $recommendation;
        return $this;
    }

    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }

    public function setApprovalCode(?string $approvalCode): self
    {
        $this->approvalCode = $approvalCode;
        return $this;
    }

    public function getProtocolTypeName(): ?string
    {
        return $this->protocolTypeName;
    }

    public function setProtocolTypeName(?string $protocolTypeName): self
    {
        $this->protocolTypeName = $protocolTypeName;
        return $this;
    }

    public function getProcessingName(): ?string
    {
        return $this->processingName;
    }

    public function setProcessingName(?string $processingName): self
    {
        $this->processingName = $processingName;
        return $this;
    }

    public function getOperationType(): ?string
    {
        return $this->operationType;
    }

    public function setOperationType(?string $operationType): self
    {
        $this->operationType = $operationType;
        return $this;
    }

    public function getOperationDate(): ?string
    {
        return $this->operationDate;
    }

    public function setOperationDate(?string $operationDate): self
    {
        $this->operationDate = $operationDate;
        return $this;
    }

    public function getAuthResult(): ?string
    {
        return $this->authResult;
    }

    public function setAuthResult(?string $authResult): self
    {
        $this->authResult = $authResult;
        return $this;
    }

    public function getAuthRequired(): ?string
    {
        return $this->authRequired;
    }

    public function setAuthRequired(?string $authRequired): self
    {
        $this->authRequired = $authRequired;
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

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
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

    public function getSlipNo(): ?string
    {
        return $this->slipNo;
    }

    public function setSlipNo(?string $slipNo): self
    {
        $this->slipNo = $slipNo;
        return $this;
    }

    protected function fillFromData(array $data)
    {
        $this->setMerchantId($data['merchant_id'] ?? null)
            ->setOrderNumber($data['ordernumber'] ?? null)
            ->setBillNumber($data['billnumber'] ?? null)
            ->setTestMode($data['testmode'] ?? null)
            ->setOrderComment($data['ordercomment'] ?? null)
            ->setOrderAmount($data['orderamount'] ?? null)
            ->setOrderCurrency($data['ordercurrency'] ?? null)
            ->setAmount($data['amount'] ?? null)
            ->setCurrency($data['currency'] ?? null)
            ->setRate($data['rate'] ?? null)
            ->setFirstName($data['firstname'] ?? null)
            ->setLastName($data['lastname'] ?? null)
            ->setMiddleName($data['middlename'] ?? null)
            ->setEmail($data['email'] ?? null)
            ->setClientIp($data['clientip'] ?? null)
            ->setIpAddress($data['ipaddress'] ?? null)
            ->setMeanTypeId($data['meantype_id'] ?? null)
            ->setMeanTypeName($data['meantypename'] ?? null)
            ->setMeanSubtype($data['meansubtype'] ?? null)
            ->setMeanNumber($data['meannumber'] ?? null)
            ->setCardHolder($data['cardholder'] ?? null)
            ->setCardExpirationDate($data['cardexpirationdate'] ?? null)
            ->setIssueBank($data['issuebank'] ?? null)
            ->setBankCountry($data['bankcountry'] ?? null)
            ->setOrderDate($data['orderdate'] ?? null)
            ->setOrderState($data['orderstate'] ?? null)
            ->setResponseCode($data['responsecode'] ?? null)
            ->setMessage($data['message'] ?? null)
            ->setCustomerMessage($data['customermessage'] ?? null)
            ->setRecommendation($data['recommendation'] ?? null)
            ->setApprovalCode($data['approvalcode'] ?? null)
            ->setProtocolTypeName($data['protocoltypename'] ?? null)
            ->setProcessingName($data['processingname'] ?? null)
            ->setOperationType($data['operationtype'] ?? null)
            ->setOperationDate($data['operationdate'] ?? null)
            ->setAuthResult($data['authresult'] ?? null)
            ->setAuthRequired($data['authrequired'] ?? null)
            ->setPacketDate($data['packetdate'] ?? null)
            ->setSignature($data['signature'] ?? null)
            ->setCheckValue($data['checkvalue'] ?? null)
            ->setSlipNo($data['slipno'] ?? null);
    }
}
