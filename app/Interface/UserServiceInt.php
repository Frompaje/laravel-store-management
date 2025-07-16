<?php

namespace App\Interface;

use App\Http\Dto\UserCreateDto;

interface UserServiceInt
{
    public function create(UserCreateDto $input);
}
