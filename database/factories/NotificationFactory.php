<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Notification;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Notification::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), 
            'content' => $this->faker->sentence, 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
