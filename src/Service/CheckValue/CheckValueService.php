<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service\CheckValue;

use Sun\BelAssist\BelAssistConfig;

class CheckValueService implements CheckValueServiceInterface
{
    public function __construct(
        private readonly BelAssistConfig $config,
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

    public function verify(CheckValueInterface $checkValue, string $expected): bool
    {
        return $this->generate($checkValue) === $expected;
    }
}
