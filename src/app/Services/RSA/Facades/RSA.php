<?php

namespace App\Services\Cryptography\RSA\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static generateKeys()
 * @method static encrypt(string $pubKey, string $data)
 * @method static decrypt(string $privKey, string $encrypted)
 *
 * @see \App\Services\Cryptography\RSA\RSA
 */
class RSA extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RSA';
    }
}
