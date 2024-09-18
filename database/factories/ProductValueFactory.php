<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductValue;
use App\Models\Product;
use App\Models\ProductField;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductValue>
 */
class ProductValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductValue::class;

    public function definition(): array
    {
        return [
            'field_id' => ProductField::factory(), 
            'product_id' => Product::factory(),
            'value' => $this->faker->word,
            'count' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}
