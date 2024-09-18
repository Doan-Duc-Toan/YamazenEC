<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductVoucher;
use App\Models\Product;
use App\Models\Voucher;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVoucher>
 */
class ProductVoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductVoucher::class;
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'voucher_id' => Voucher::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
