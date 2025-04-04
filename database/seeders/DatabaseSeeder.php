<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Document;
use App\Models\People;
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
            'name' => fake()->name(),
            'email' => 'test@example.com',
        ]);

        People::factory(5)->create();
        
        Document::factory(3)->create();

        Department::factory(3)->create();
    }
}
