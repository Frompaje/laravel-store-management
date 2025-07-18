<?php

namespace App\Service;

use App\Http\Dto\UserCreateDto;
use App\Interface\UserServiceInt;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserServiceImp implements UserServiceInt
{
    public function create(UserCreateDto $input)
    {
        try {
            $user = User::create([
                'uuid' => Str::uuid()->toString(),
                'name' => $input->name,
                'email' => $input->email,
                'password' => Hash::make($input->password),
            ]);

            return [
                'isSucess' => true,
                'message' => 'Usuário criado com sucesso',
                'data' => $user
            ];
        } catch (\Exception $e) {
            return [
                'isSucess' => false,
                'message' => 'Erro ao criar usuário: ' . $e->getMessage(),
                'data' => null
            ];
        }
    }
}
