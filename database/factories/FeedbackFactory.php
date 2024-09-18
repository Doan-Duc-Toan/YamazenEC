<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Feedback::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Tạo ngẫu nhiên user
            'comment' => $this->faker->sentence, // Comment ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
