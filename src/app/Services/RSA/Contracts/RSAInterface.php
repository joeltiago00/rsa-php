<?php

namespace App\Services\Cryptography\RSA\Contracts;

interface RSAInterface
{
    public function generateKeys();

    public function encrypt(string $pubKey, string $data): string;

    public function decrypt(string $privKey, string $encrypted): string;
}
