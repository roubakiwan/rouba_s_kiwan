<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use App\Models\Usere;
use App\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Category::class);
        $this->call( Product::class);
        $this->call( Usere::class);
        // \App\Models\User::factory(10)->create();
         Usere::factory(500.000)->create();
         Category::factory(500.000)->create();
         Product::factory(500.000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
