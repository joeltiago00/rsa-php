<?php

namespace App\Services\Cryptography\RSA;

use App\Exceptions\RSA\FailToDecrypt;
use App\Exceptions\RSA\FailToEncrypt;
use App\Services\Cryptography\RSA\Contracts\RSAInterface;
use App\Services\Cryptography\RSA\Contracts\RSAResponseInterface;

class RSA implements RSAInterface
{
    /**
     * @return RSAResponseInterface
     */
    public function generateKeys(): RSAResponseInterface
    {
        // Create the private and public key
        $private_key = openssl_pkey_new(config('app.rsa.config'));

        // Extract the private key from $private_key to $privKey
        openssl_pkey_export($private_key, $privKey);

        // Extract the public key from private key
        $pubKey = openssl_pkey_get_details($private_key)['key'];

        return new RSAResponse($pubKey, $privKey);
    }

    /**
     * @param string $pubKey
     * @param string $data
     * @return string
     * @throws FailToEncrypt
     */
    public function encrypt(string $pubKey, string $data): string
    {
        try {
            openssl_public_encrypt($data, $encrypted, $pubKey);
        } catch (\Exception) {
            throw new FailToEncrypt($e);
        }

        return $encrypted;
    }

    /**
     * @param string $privKey
     * @param string $encrypted
     * @return string
     * @throws FailToDecrypt
     */
    public function decrypt(string $privKey, string $encrypted): string
    {
        try {
            openssl_private_decrypt($encrypted, $decrypted, $privKey);
        } catch (\Exception) {
            throw new FailToDecrypt($e);
        }

        return $decrypted;
    }
}
