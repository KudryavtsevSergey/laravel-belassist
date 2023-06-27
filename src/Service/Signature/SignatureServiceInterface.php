<?php

declare(strict_types=1);

namespace Sun\BelAssist\Service\Signature;

interface SignatureServiceInterface
{
    public function generate(SignatureInterface $signature): string;

    public function verify(SignatureInterface $signature, string $expected): bool;
}
