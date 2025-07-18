<?php

namespace App\Http\Dto;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductsCreateDto
{
    /**
     * Name of the product.
     * @var string
     */
    public $name;
    /**
     * Description of the product.
     * @var string
     */
    public $description;

    /**
     * Price of the product.
     * @var float
     */
    public $price;
    /**
     * Stock quantity of the product.
     * @var int
     */
    public $stock;

    /**
     * Category of the product.
     * @var string
     */
    public $category;

    /**
     * Indicates if the product is active.
     * @var bool
     */
    public $isActive;

    /**
     *  User who deleted the product.
     * @var string
     */
    public $deleted_by;

    /**
     * Create a new class instance.
     */
    public function __construct(array $input)
    {

        $this->validator($input);

        $this->name = $input['name'] ;
        $this->description = $input['description'] ;
        $this->price = $input['price'] ;
        $this->stock = $input['stock'];
        $this->category = $input['category'] ;
        $this->isActive = $input['is_active'] ;
        $this->deleted_by = $input['deleted_by'] ?? null;
    }

    private function validator(array $input)
    {
        $validator = Validator::make(
            $input,
            [
                'name' => ['required', 'string'],
                'description' => ['required', 'string'],
                'price' => ['required', 'numeric', 'min:0'],
                'stock' => ['required', 'integer', 'min:0'],
                'category' => ['required', 'string'],
                'is_active' => ['required', 'boolean'],
                'deleted_by' => ['nullable', 'string'],
            ],
            [
                'name.required' => 'O nome do produto é obrigatório.',
                'description.required' => 'A descrição do produto é obrigatória.',
                'price.required' => 'O preço do produto é obrigatório.',
                'stock.required' => 'A quantidade em estoque do produto é obrigatória.',
                'category.required' => 'A categoria do produto é obrigatória.',
                'is_active.required' => 'O status de atividade do produto é obrigatório.',
            ]
        );

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

}
