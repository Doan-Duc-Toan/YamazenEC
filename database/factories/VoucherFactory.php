<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Voucher;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Voucher::class;
    public function definition(): array
    {
        return [
            'code' => strtoupper($this->faker->lexify('?????')), // Mã voucher ngẫu nhiên
            'discount' => $this->faker->numberBetween(5, 50), // Giá trị giảm giá ngẫu nhiên (5-50%)
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
