<?php

namespace Database\Factories;
use App\Models\ProductField;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductField::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'product_count' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
