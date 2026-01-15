<?php

namespace Database\Seeders;

use App\Models\Gift;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Gift::create([
            'name' => 'Teddy Bear',
            'url' => 'https://example.com/teddy',
            'details' => 'A soft and cuddly teddy bear.',
            'price' => 19.99,
        ]);
        Gift::create([
            'name' => 'Chocolate Box',
            'url' => 'https://example.com/chocolate',
            'details' => 'A box of assorted chocolates.',
            'price' => 29.99,
        ]);
        Gift::create([
            'name' => 'Flower Bouquet',
            'url' => 'https://example.com/flowers',
            'details' => 'A beautiful bouquet of fresh flowers.',
            'price' => 39.99,
        ]);
    }
}
