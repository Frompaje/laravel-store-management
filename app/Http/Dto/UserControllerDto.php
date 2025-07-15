<?php

namespace App\Dto;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserControllerDto
{
    /**
     * Nome do usuario.
     * @var String
     */
    private $name;

    /**
     * Senha do usuario
     * @var String
     */
    private $password;

    /**
     * Repeat-password para fazer match de senha
     * @var String
     */
    private $repeatPassword;


    /**
     * Repeat-password para fazer match de senha
     * @var String
     */
    private $email;



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
                'passwoord' => ['required', 'string'],
                'repeatPasswoord' => ['required', 'string', 'same:password']
            ],
            [
                'name.required' => 'O usuario precisa de um nome',
                'password.required' => 'Você precisa enviar a senha',
                'password.same' => 'A senha precisa ser a mesma'
            ]
        );

        if ($validator->fails()) {
            return $validator->errors();

            throw ValidationException::withMessages([
                'validation_errors' => $validator->errors()
            ]);
        }
    }
}
