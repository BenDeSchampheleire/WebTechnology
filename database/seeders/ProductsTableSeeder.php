<?php

namespace Database\Seeders;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        ProductFactory::new()->count(8)->create();
    }
}
