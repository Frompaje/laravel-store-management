<?php

namespace App\Service;

use App\Dto\UserCreateDto;
use App\Interface\UserServiceInt;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserServiceImp implements UserServiceInt
{
    public function create(UserCreateDto $input)
    {
        $input['password'] = Hash::make($input['password']);
        User::create($input);
    }
}
