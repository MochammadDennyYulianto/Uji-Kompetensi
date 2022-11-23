<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Category::factory(6)->create();
        Product::factory(22)->create();
        Country::factory(20)->create();
    }
}
