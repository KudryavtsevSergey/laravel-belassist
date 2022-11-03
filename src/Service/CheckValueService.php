<?php

namespace Sun\BelAssist\Service;

use Sun\BelAssist\BelAssistConfig;

class CheckValueService implements CheckValueServiceContract
{
    public function __construct(
        private BelAssistConfig $config,
    ) {
    }

    public function generate(CheckValueInterface $checkValue): string
    {
        $value = implode(';', [
            $this->config->getMerchantId(),
            $checkValue->getOrder(),
            $checkValue->getAmount(),
            $checkValue->getCurrency(),
        ]);
        return strtoupper(md5(strtoupper(md5($this->config->getSalt()) . md5($value))));
    }

    public function verify(CheckValueInterface $checkValue, string $value): bool
    {
        return $this->generate($checkValue) === $value;
    }
}
