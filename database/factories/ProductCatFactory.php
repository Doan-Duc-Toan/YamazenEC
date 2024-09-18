<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCat;
use App\Models\Product;
use App\Models\Cat;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCat>
 */
class ProductCatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductCat::class;
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(), // Tạo ngẫu nhiên product
            'cat_id' => Cat::factory(), // Tạo ngẫu nhiên cat
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
