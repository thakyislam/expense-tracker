<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a user with a unique email using the current timestamp
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test_user_' . time() . '@example.com',  // Unique email with timestamp
        ]);
    }
}
