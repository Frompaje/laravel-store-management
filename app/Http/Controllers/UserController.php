<?php

namespace App\Http\Controllers;

use App\Dto\UserControllerDto;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $dto = new UserControllerDto($request->all());

    }
}
