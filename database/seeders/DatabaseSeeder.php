<?php

namespace Database\Seeders;

use App\Models\Donation;
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
         User::factory(30)
             ->has(
                 Donation::factory(3)
             )
             ->create();
    }
}
