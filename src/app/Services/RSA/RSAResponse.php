<?php

namespace App\Services\Cryptography\RSA;

use App\Services\Cryptography\RSA\Contracts\RSAResponseInterface;

class RSAResponse implements RSAResponseInterface
{
    /**
     * @var string
     */
    private string $publicKey;
    /**
     * @var string
     */
    private string $privateKey;

    /**
     * @param string $publicKey
     * @param string $privateKey
     */
    public function __construct(string $publicKey, string $privateKey)
    {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
    }

    /**
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }
}
