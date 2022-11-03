<?php

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;
use Sun\BelAssist\Exceptions\XmlGenerationException;

abstract class AbstractResponseGenerator
{
    public function __construct(
        private int $firstCode,
        private int $secondCode,
    ) {
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
        $xml->addAttribute('firstcode', $this->firstCode);
        $xml->addAttribute('secondcode', $this->secondCode);
        return $xml;
    }
}
