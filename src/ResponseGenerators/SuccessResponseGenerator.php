<?php

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;
use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class SuccessResponseGenerator extends AbstractResponseGenerator
{
    private string $billNumber;
    private string $packetDate;

    public function __construct(string $billNumber, string $packetDate)
    {
        parent::__construct(FirstResponseCodeEnum::SUCCESS, SecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION);
        $this->billNumber = $billNumber;
        $this->packetDate = $packetDate;
    }

    protected function createXml(): SimpleXMLElement
    {
        $xml = parent::createXml();
        $orderNode = $xml->addChild('order');
        $orderNode->addChild('billnumber', $this->billNumber);
        $orderNode->addChild('packetdate', $this->packetDate);
        return $xml;
    }
}
