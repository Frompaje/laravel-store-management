<?php

namespace App\Http\Controllers;

use App\Http\Dto\UserCreateDto;
use App\Interface\UserServiceInt;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    private UserServiceInt $service;
    public function __construct(UserServiceInt $serviceInt)
    {
        $this->service = $serviceInt;
    }

    public function create(Request $request)
    {
        try {
            Log::info('Creating user with data: ', $request->all());
            $dto = new UserCreateDto($request->all());

            $response = $this->service->create($dto);

            if(!$response['isSucess']) {
                return response()->json([
                    'error' => $response['message']
                ], 400);
            }

            return response()->json([
                'message' => $response['message'],
                'data' => $response['data']
            ], 201);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
