<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service\Signature;

use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Rsa\Sha256;
use Sun\BelAssist\BelAssistConfig;
use Sun\BelAssist\Exceptions\Request\WrongBelAssistSignatureException;

class SignatureService implements SignatureServiceInterface
{
    private const EMPTY = 'empty';

    private Sha256 $signer;
    private Key $privateKey;
    private Key $publicKey;

    public function __construct(
        private readonly BelAssistConfig $config,
    ) {
        $privateKey = $config->makePrivateCryptKey();
        $publicKey = $config->makePublicCryptKey();

        $this->signer = new Sha256();
        $this->privateKey = InMemory::plainText(
            $privateKey?->getKeyContents() ?: self::EMPTY,
            $privateKey?->getPassPhrase() ?? ''
        );
        $this->publicKey = InMemory::plainText(
            $publicKey?->getKeyContents() ?: self::EMPTY,
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
        $expected = base64_decode($expected, true) ?: throw new WrongBelAssistSignatureException($expected);
        return $this->signer->verify($expected, $payload, $this->publicKey);
    }

    /**
     * @param SignatureInterface $signature
     * @return non-empty-string
     */
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
