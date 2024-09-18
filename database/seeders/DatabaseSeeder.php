<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductField;
use App\Models\ProductValue;
use App\Models\Cat;
use App\Models\ProductCat;
use App\Models\Rating;
use App\Models\Feedback;
use App\Models\Voucher;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Conversation;
use App\Models\Favorite;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(50)->create();
        Product::factory()->count(50)->create();
        ProductField::factory()->count(50)->create();
        ProductValue::factory()->count(50)->create();
        Cat::factory()->count(50)->create();
        ProductCat::factory()->count(50)->create();
        Rating::factory()->count(50)->create();
        Feedback::factory()->count(50)->create();
        Voucher::factory()->count(50)->create();
        Conversation::factory()->count(50)->create();
        Message::factory()->count(50)->create();
        Notification::factory()->count(50)->create();
        Favorite::factory()->count(50)->create();
    }
}
