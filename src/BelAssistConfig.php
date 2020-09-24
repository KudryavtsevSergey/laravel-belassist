<?php

namespace Sun\BelAssist;

class BelAssistConfig
{
    public function getGateway(): ?string
    {
        return config('belassist.gateway');
    }

    public function getMerchantId(): ?string
    {
        return config('belassist.merchant_id');
    }

    public function getUsername(): ?string
    {
        return config('belassist.username');
    }

    public function getPassword(): ?string
    {
        return config('belassist.password');
    }
}
