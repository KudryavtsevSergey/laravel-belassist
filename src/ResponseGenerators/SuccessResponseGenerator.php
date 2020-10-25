<?php

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;
use Sun\BelAssist\Enum\BelAsssitFirstResponseCodeEnum;
use Sun\BelAssist\Enum\BelAssistSecondResponseCodeEnum;

class SuccessResponseGenerator extends AbstractResponseGenerator
{
    private string $billNumber;
    private string $packetDate;

    public function __construct(string $billNumber, string $packetDate)
    {
        parent::__construct(BelAsssitFirstResponseCodeEnum::SUCCESS, BelAssistSecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION);
        $this->billNumber = $billNumber;
        $this->packetDate = $packetDate;
    }

    protected function configureXml(SimpleXMLElement $xml)
    {
        $orderNode = $xml->addChild('order');
        $orderNode->addChild('billnumber', $this->billNumber);
        $orderNode->addChild('packetdate', $this->packetDate);
    }
}
