<?php

namespace App\Http\Controllers;

use App\Dto\UserCreateDto;
use App\Interface\UserServiceInt;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserServiceInt $service;
    public function __construct(UserServiceInt $serviceInt)
    {
        $this->service = $serviceInt;
    }
    public function create(Request $request){
        $dto = new UserCreateDto($request->all());

        $response = $this->service->create($dto);

        return response()->json(['message'=>'usuario criado com sucesso',201]);
    }
}
