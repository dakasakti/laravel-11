<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::create([
            'name' => 'Bloggers',
            'slug' => 'bloggers',
            'is_published' => true,
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet',
            'is_published' => true,
        ]);

        Category::create([
            'name' => 'Uncategorized',
            'slug' => 'uncategorized',
            'is_published' => true,
        ]);
    }
}
