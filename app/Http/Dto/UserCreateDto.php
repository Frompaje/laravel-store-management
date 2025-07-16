<?php

namespace App\Http\Dto;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserCreateDto
{
    /**
     * Nome do usuario.
     * @var String
     */
    public $name;

    /**
     * Senha do usuario
     * @var String
     */
    public $password;

    /**
     * Repeat-password para fazer match de senha
     * @var String
     */
    public $repeatPassword;


    /**
     * Repeat-password para fazer match de senha
     * @var String
     */
    public $email;

    /**
     * Create a new class instance.
     */
    public function __construct(array $input)
    {

        $this->validator($input);

        $this->name = $input['name'];
        $this->email = $input['email'];
        $this->password = $input['password'];
        $this->repeatPassword = $input['repeatPassword'];
    }

    public function validator(array $input)
    {

        $validator = Validator::make(
            $input,
            [
                'name' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'string', 'min:8'],
                'repeatPassword' => ['required', 'string', 'same:password'],

            ],
            [
                'name.required' => 'O usuario precisa de um nome',
                'email.required' => 'O email é obrigatório',
                'email.email' => 'O email deve ser um endereço de email válido',
                'password.required' => 'Você precisa enviar a senha',
                'password.min' => 'A senha deve ter pelo menos 8 caracteres',
                'password.confirmed' => 'A confirmação da senha não corresponde',
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }
}
