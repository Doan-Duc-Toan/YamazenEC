<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Favorite::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), 
            'product_id' => Product::factory(), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
