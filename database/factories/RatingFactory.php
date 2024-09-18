<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rating;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Rating::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), 
            'product_id' => Product::factory(),
            'comment' => $this->faker->sentence, 
            'rate' => $this->faker->randomElement(['1', '2', '3', '4', '5']), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
