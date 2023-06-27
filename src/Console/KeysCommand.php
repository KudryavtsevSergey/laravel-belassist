<?php

declare(strict_types=1);

namespace Sun\BelAssist\Console;

use Illuminate\Console\Command;
use phpseclib3\Crypt\RSA;
use Sun\BelAssist\BelAssist;

class KeysCommand extends Command
{
    protected $signature = 'assist:keys
                                      {--force : Overwrite keys they already exist}
                                      {--length=1024 : The length of the private key}';

    protected $description = 'Create the encryption keys for bel assist signature verification';

    public function handle(): void
    {
        [$publicKey, $privateKey] = [
            BelAssist::publicKeyPath(),
            BelAssist::privateKeyPath(),
        ];

        if ((file_exists($publicKey) || file_exists($privateKey)) && !$this->option('force')) {
            $this->error('Encryption keys already exist. Use the --force option to overwrite them.');
        } else {
            $key = RSA::createKey((int)$this->option('length'));
            file_put_contents($publicKey, $key->getPublicKey());
            file_put_contents($privateKey, (string)$key);

            $this->info('Encryption keys generated successfully.');
        }
    }
}
