<?php

namespace App\Exceptions\RSA;


use Illuminate\Http\Response;

class FailToDecrypt extends RSAException
{
    public function __construct(\Throwable $e)
    {
        //TODO:: (Joel 15/06) Gerar log do erro e devolver na mensagem

        parent::__construct(
            trans('exceptions.rsa.fail-to-decrypt'),
            Response::HTTP_INTERNAL_SERVER_ERROR
        );
    }
}
