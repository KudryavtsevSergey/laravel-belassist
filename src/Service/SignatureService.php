<?php

namespace Sun\BelAssist\Service;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use Sun\BelAssist\BelAssistConfig;

class SignatureService implements SignatureServiceContract
{
    private const EMPTY = 'empty';

    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(
        private BelAssistConfig $config,
    ) {
        $privateKey = $config->makePrivateCryptKey();
        $publicKey = $config->makePublicCryptKey();

        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText(
            $privateKey?->getKeyContents() ?? self::EMPTY,
            $privateKey?->getPassPhrase() ?? ''
        );
        $this->publicKey = InMemory::plainText(
            $publicKey?->getKeyContents() ?? self::EMPTY,
            $publicKey?->getPassPhrase() ?? ''
        );
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
