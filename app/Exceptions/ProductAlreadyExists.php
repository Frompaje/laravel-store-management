<?php

namespace App\Exceptions;

use Exception;

final class ProductAlreadyExists extends Exception
{
    protected $message = 'Produto já existe com o mesmo nome.';

    public function __construct()
    {
        parent::__construct($this->message);
    }
}
