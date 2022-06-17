<?php

namespace App\Services\Cryptography\RSA\Contracts;

interface RSAResponseInterface
{
    public function getPrivateKey(): string;

    public function getPublicKey(): string;
}
