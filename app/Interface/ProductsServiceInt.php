<?php

namespace App\Interface;

use App\Http\Dto\ProductsCreateDto;

interface ProductsServiceInt
{
    public function create(ProductsCreateDto $input);
}
