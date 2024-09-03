<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admiral',
            'email' => 'admiral@monmano.com',
        ]);

        User::factory()->create([
            'name' => 'Jay Bienvenu',
            'email' => 'jay@monmano.com',
        ]);
    }
}
