<?php

namespace App\Interface;

use App\Dto\UserCreateDto;

interface UserServiceInt
{
    public function create(UserCreateDto $input);
}
