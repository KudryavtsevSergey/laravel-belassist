<?php

namespace Sun\BelAssist;

use Illuminate\Contracts\Config\Repository as Config;

class BelAssistConfig
{
    public function __construct(
        private Config $config,
    ) {
    }

    public function getGateway(): ?string
    {
        return $this->config->get('belassist.gateway');
    }

    public function getMerchantId(): ?string
    {
        return $this->config->get('belassist.merchant_id');
    }

    public function getUsername(): ?string
    {
        return $this->config->get('belassist.username');
    }

    public function getPassword(): ?string
    {
        return $this->config->get('belassist.password');
    }

    public function getSalt(): ?string
    {
        return $this->config->get('belassist.salt');
    }

    public function isCheckSignature(): bool
    {
        return $this->config->get('belassist.check_signature');
    }

    public function isCheckCheckValue(): bool
    {
        return $this->config->get('belassist.check_check_value');
    }
}
