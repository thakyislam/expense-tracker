<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenseSeeder extends Seeder
{
    public function run(): void
    {DB::table('expenses')->insert([
        [
            'user_id' => 1, // Ensure a user with ID 1 exists in the users table
            'category_id' => 1,
            'amount' => 500,
            'description' => 'Bought groceries',
            'date' => now(),
        ],
        [
            'user_id' => 1,
            'category_id' => 2,
            'amount' => 200,
            'description' => 'Bus fare',
            'date' => now(),
        ],
        [
            'user_id' => 1,
            'category_id' => 3,
            'amount' => 1000,
            'description' => 'Movie ticket',
            'date' => now(),
        ],
    ]);
    
    }
}
