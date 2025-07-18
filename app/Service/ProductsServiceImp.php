<?php

namespace App\Service;

use App\Exceptions\ProductAlreadyExists;
use App\Http\Dto\ProductsCreateDto;
use App\Interface\ProductsServiceInt;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductsServiceImp implements ProductsServiceInt
{
    public function create(ProductsCreateDto $input)
    {
        try {
            $hasProductName = Product::where('name', $input->name)->first();

            if($hasProductName) {
                throw new ProductAlreadyExists();
            }

            $product = Product::create([
                'name' => $input->name,
                'description' => $input->description,
                'price' => $input->price,
                'stock' => $input->stock,
            ]);

            return [
                'isSucess' => true,
                'message' => 'Produto criado com sucesso',
                'data' => $product
            ];
        } catch (\Exception $e) {
            return [
                'isSucess' => false,
                'message' => 'Erro ao criar produto: ' . $e->getMessage(),
                'data' => null
            ];
        }


    }

}
