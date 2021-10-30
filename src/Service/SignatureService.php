<?php

namespace Sun\BelAssist\Service;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use League\OAuth2\Server\CryptKey;
use Sun\BelAssist\BelAssistConfig;

class SignatureService implements SignatureServiceContract
{
    private BelAssistConfig $config;
    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(BelAssistConfig $config, CryptKey $privateKey, CryptKey $publicKey)
    {
        $this->config = $config;
        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText($privateKey->getKeyContents(), $privateKey->getPassPhrase() ?? '');
        $this->publicKey = InMemory::plainText($publicKey->getKeyContents(), $publicKey->getPassPhrase() ?? '');
    }

    public function generate(SignatureInterface $signature): string
    {
        $payload = $this->generatePayload($signature);
        return base64_encode($this->signer->sign($payload, $this->privateKey));
    }

    public function verify(SignatureInterface $signature, string $expected): bool
    {
        $payload = $this->generatePayload($signature);
        $expected = base64_decode($expected);
        return $this->signer->verify($expected, $payload, $this->publicKey);
    }

    private function generatePayload(SignatureInterface $signature): string
    {
        $value = implode(';', [
            $this->config->getMerchantId(),
            $signature->getOrder(),
            $signature->getAmount(),
            $signature->getCurrency(),
        ]);
        return md5($value);
    }
}