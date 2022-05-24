<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Product;
use App\Models\User;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(Product::class)->count(8)->create();
    }
}
