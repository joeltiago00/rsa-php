# 🔐 rsa-laravel

This is a class to handle with RSA criptography (asymmetrical).
<br><br>

1. Generate keys:
```
<?php

// It is recommended that you save the keys in files or elsewhere so that you can reuse them in other functions.
public function generateKeys()
{
  // Using Facade
  $rsa = RSA::generateKeys();
  
  $pubKey = $rsa->getPublicKey();
  $privKey = $rsa->getPrivateKey();
  
  // Using concrete class
  $rsa = new \App\Services\RSA\RSA();
  
  $keys = $rsa->generateKeys();
  
  $pubKey = $keys->getPublicKey();
  $privKey = $keys->getPrivateKey();
}
```
<br>

2. Encrypt data:
```
<?php

// Anything you want to encrypt needs to be converted to string before being encrypted.
public function encrypt()
{
  // Using Facade
  $encrypted = RSA::encrypt($pubKey, 'Data for encrypt');
  
  // Using concrete class
   $rsa = new \App\Services\RSA\RSA();
   
   $encrypted = $rsa->encrypt($pubKey, 'Data for encrypt');
}
```

3. Decrypt data:
```
<?php

public function decrypt()
{
  // Using Facade
  $decrypted = RSA::decrypt($privKey, $encrypted);
  
  // Using concrete class
   $rsa = new \App\Services\RSA\RSA();
   
   $decrypted = $rsa->decrypt($privKey, $encrypted);
}
```
