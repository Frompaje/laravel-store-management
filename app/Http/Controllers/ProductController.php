<?php

namespace App\Http\Controllers;

use App\Http\Dto\ProductsCreateDto;
use App\Interface\ProductsServiceInt;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    private ProductsServiceInt $productService;
    public function __construct(private readonly ProductsServiceInt $productServiceInt)
    {
        $this->productService = $productServiceInt;
    }

    public function create(Request $request)
    {
        try {

            $dto = new ProductsCreateDto($request->all());

            $response = $this->productService->create($dto);

            if (!$response['isSucess']) {
                return response()->json([
                    'message' => $response['message'],
                    'data' => $response['data']
                ], 400);
            }

            return response()->json([
                'message' => $response['message'],
                'data' => $response['data']
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Erro de validação',
                'errors' => $e->validator->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Erro ao criar produto: ' . $e->getMessage(),
                'data' => null
            ], 500);
        }
    }
}
