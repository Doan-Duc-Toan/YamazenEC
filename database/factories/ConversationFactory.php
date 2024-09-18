<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conversation;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conversation>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Conversation::class;
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Tạo ngẫu nhiên user
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
