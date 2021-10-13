<?php

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;
use Sun\BelAssist\Exceptions\XmlGenerationException;

abstract class AbstractResponseGenerator
{
    private int $firstCode;
    private int $secondCode;

    public function __construct(int $firstCode, int $secondCode)
    {
        $this->firstCode = $firstCode;
        $this->secondCode = $secondCode;
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
