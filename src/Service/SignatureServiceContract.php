<?php

namespace Sun\BelAssist\Service;

interface SignatureServiceContract
{
    public function generate(SignatureInterface $signature): string;

    public function verify(SignatureInterface $signature, string $expected): bool;
}
