<?php

namespace Database\Seeders;

use App\Models\ItemCategories;
use App\Models\ItemDetails;
use App\Models\Items;
use App\Models\User;
use App\Models\Warehouses;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ItemCategories::factory(5)->create();

        // Items::factory(10)->create();
        
        // ItemDetails::create([
        //     'weight' => fake()->randomFloat(2, 1, 10),
        //     'length' => fake()->randomFloat(2, 1, 10),
        //     'width' => fake()->randomFloat(2, 1, 10),
        //     'height'=> fake()->randomFloat(2, 1, 10),
        //     'manufacturer' => fake()->company(),
        //     'item_id' => 2
        // ]);


        Warehouses::factory(5)->create();
    }
}
