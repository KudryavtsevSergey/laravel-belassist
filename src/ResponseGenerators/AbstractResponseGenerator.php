<?php

declare(strict_types=1);

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;
use Sun\BelAssist\Enum\FirstResponseCodeEnum;
use Sun\BelAssist\Enum\SecondResponseCodeEnum;
use Sun\BelAssist\Exceptions\XmlGenerationException;

abstract class AbstractResponseGenerator
{
    public function __construct(
        private int $firstCode,
        private int $secondCode,
    ) {
        FirstResponseCodeEnum::checkAllowedValue($firstCode);
        SecondResponseCodeEnum::checkAllowedValue($secondCode);
    }

    public function generateXml(): string
    {
        $xml = $this->createXml();

        $xmlResult = $xml->asXML();
        if ($xmlResult === false) {
            throw new XmlGenerationException();
        }
        return $xmlResult;
    }

    protected function createXml(): SimpleXMLElement
    {
        $xml = new SimpleXMLElement('<pushpaymentresult />');
        $xml->addAttribute('firstcode', (string)$this->firstCode);
        $xml->addAttribute('secondcode', (string)$this->secondCode);
        return $xml;
    }
}
