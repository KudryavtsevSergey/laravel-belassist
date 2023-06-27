<?php

declare(strict_types=1);

namespace Sun\BelAssist\ResponseGenerators;

use DateTimeInterface;
use SimpleXMLElement;
use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;

class SuccessResponseGenerator extends AbstractResponseGenerator
{
    public function __construct(
        private string $billNumber,
        private DateTimeInterface $packetDate,
    ) {
        parent::__construct(FirstResponseCodeEnum::SUCCESS, SecondResponseCodeEnum::NO_ADDITIONAL_INFORMATION);
    }

    protected function createXml(): SimpleXMLElement
    {
        $xml = parent::createXml();
        $orderNode = $xml->addChild('order');
        $orderNode->addChild('billnumber', $this->billNumber);
        $orderNode->addChild('packetdate', $this->packetDate->format('d.m.Y H:i:s'));
        return $xml;
    }
}
