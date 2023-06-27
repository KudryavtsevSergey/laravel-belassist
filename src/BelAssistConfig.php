<?php

declare(strict_types=1);

namespace Sun\BelAssist;

use Illuminate\Contracts\Config\Repository;
use League\OAuth2\Server\CryptKey;

class BelAssistConfig
{
    public function __construct(
        private Repository $config,
    ) {
    }

    public function getGateway(): string
    {
        return rtrim($this->config->get('belassist.gateway'), '/');
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

    public function getSalt(): string
    {
        return $this->config->get('belassist.salt');
    }

    public function isCheckSignature(): bool
    {
        return $this->config->get('belassist.check_signature', false);
    }

    public function isCheckCheckValue(): bool
    {
        return $this->config->get('belassist.check_check_value', false);
    }

    public function makePrivateCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey($this->getPrivateKey(), BelAssist::privateKeyPath());
    }

    public function makePublicCryptKey(): ?CryptKey
    {
        return $this->makeCryptKey($this->getPublicKey(), BelAssist::publicKeyPath());
    }

    private function getPublicKey(): ?string
    {
        return $this->config->get('belassist.public_key');
    }

    private function getPrivateKey(): ?string
    {
        return $this->config->get('belassist.private_key');
    }

    private function makeCryptKey(?string $key, string $file): ?CryptKey
    {
        $keyPath = $key !== null ? str_replace('\\n', "\n", $key) : null;
        if ($keyPath === null) {
            $filePath = sprintf('file://%s', $file);
            if (is_file($filePath)) {
                $keyPath = $filePath;
            }
        }

        return $keyPath !== null ? new CryptKey($keyPath, keyPermissionsCheck: false) : null;
    }
}
