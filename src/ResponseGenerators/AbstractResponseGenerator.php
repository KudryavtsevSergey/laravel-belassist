<?php

namespace Sun\BelAssist\ResponseGenerators;

use SimpleXMLElement;

abstract class AbstractResponseGenerator
{
    private int $firstCode;
    private int $secondCode;

    public function __construct(int $firstCode, int $secondCode)
    {
        $this->firstCode = $firstCode;
        $this->secondCode = $secondCode;
    }

    public function generateXml(): SimpleXMLElement
    {
        $xml = new SimpleXMLElement('<pushpaymentresult />');
        $xml->addAttribute('firstcode', $this->firstCode);
        $xml->addAttribute('secondcode', $this->secondCode);

        $this->configureXml($xml);

        return $xml;
    }

    protected function configureXml(SimpleXMLElement $xml)
    {
    }
}
